<?php
session_start();
require_once('db.php');
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
# Setting your API key
set_api_key("SqohU2ZpR8OFy33GOXP7vB5naKWTwIzF3bojA7OKeR0");
if($_POST){
    if($_POST['img-data']){
        echo "image data present";
        $imgData = str_replace(' ','+',$_POST['img-data']);
        $imgData =  substr($imgData,strpos($imgData,",")+1);
        $imgData = base64_decode($imgData);
        // Path where the image is going to be saved
        $filePath = $_SERVER['DOCUMENT_ROOT']. '/uhack/profile/temp.png';
        // Write $imgData into the image file
        $file = fopen($filePath, 'w');
        fwrite($file, $imgData);
        fclose($file);
        $_SESSION['image']="temp.png" ;
    }
}

if(isset($_SESSION)){
    if(isset($_SESSION['image'])){
        # when sending a image file
        $path_to_image = "profile/".$_SESSION['image'];
        $str=facial_emotion($path_to_image);
        // echo $str;
        $json = json_decode($str, true);
        // echo '<pre>' . print_r($json, true) . '</pre>';
        echo $json['facial_emotion'][0]['tag']."<br>" ;
        // echo $json['facial_emotion'][0]['score'] ;
        $emotion = $json['facial_emotion'][0]['tag'];
        $_SESSION['emotion']=$emotion;
        echo $emotion."<img src='profile/temp.png'>";
    }
}

?>