<?php 
 session_start();
 require_once('db.php');
 ?>



<?php
if(isset($_POST)){
    if(isset($_POST['submit'])){
        $mess=$_POST['message'];
        $query_add = "INSERT INTO `chat` (`id`, `message`, `sender`) VALUES (NULL, '$mess','1')";
        $result_send = mysqli_query($connection,$query_add);
    }
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>

 <div id="display">
 <?php
$query = "SELECT * FROM `chat`";
$result = $connection->query($query);

while($row = $result->fetch_assoc())
{  if($row['sender']==1){
    echo "you:".$row['message']."<br>";
} else {
    echo "anonymous:".$row['message']."<br>";   
}
   
}

?>
 </div>
 <form action="chat.php" method="post">
    <input type="text" placeholder="enter message .. " name="message" required>
    <button type="submit" name="submit" value="Send">Send</button>
 </form>
 <script type="text/javascript">

$(document).ready(function() {

   $("#display").click(function() {                

     $.ajax({    //create an ajax request to display.php
       type: "GET",
       url: "chat.php",             
       dataType: "html",   //expect html to be returned                
       success: function(response){                    
           $("#responsecontainer").html(response); 
           //alert(response);
       }

   });
});
});

</script>
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 </body>
 </html>