<?php
session_start();
require_once('db.php');
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
# Setting your API key
set_api_key("SqohU2ZpR8OFy33GOXP7vB5naKWTwIzF3bojA7OKeR0");

if(isset($_SESSION)){
    if(isset($_SESSION['image'])){
        # when sending a image file
        $path_to_image = "profile/".$_SESSION['image'];
        $str=facial_emotion($path_to_image);
        // echo $str;
        $json = json_decode($str, true);
        // echo '<pre>' . print_r($json, true) . '</pre>';
        echo "Looks like you are feeling ".$json['facial_emotion'][0]['tag']."<br>" ;
        // echo $json['facial_emotion'][0]['score'] ;
        $emotion = $json['facial_emotion'][0]['tag'];

        if(($emotion=="Sad")||($emotion=="Happy")||($emotion=="Angry")||($emotion=="Neutral"))
        {
            $query = "SELECT * FROM `$emotion`";
            $result = $connection->query($query);
            while ($row = $result->fetch_assoc()){
                $task=$row['task'];
                echo $task."<br>";
            }
        }
        if(($emotion=="Sad")||($emotion=="Fear")||($emotion=="Angry")||($emotion=="Disgust")){
            echo "Looks you are not at all fine right now and need urgent help" ;
        } 
    }
}

# when sending a image file

// $path_to_image = "<path_to_image>";
// echo facial_emotion($path_to_image);

# when sending a image url

// $url_to_image = "https://infoxpression.in/img/ashish.jpg";
// echo facial_emotion_url($url_to_image);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<form action="imageadd.php" method="POST" enctype="multipart/form-data">
<label for="image">Add Image:</label>
<input type="file" id="add-photo" accept="image/*" capture="camera" name="file">
<button type="submit" name="submit" value="Upload">submit</button>
<!-- <p id="img-text" ></p> -->
<textarea name="img-data" id="img-text"></textarea>
</form>

<div class="booth">
    <video id="video" height="300" width="400"></video>
    <a href="#" id="capture" class="booth-capture-button">Take Photo</a>
    <canvas id="canvas" width="400" height="300"></canvas>
    <img src="" alt="photo of you" id="photo">
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/photo.js"></script>
</body>

</html>