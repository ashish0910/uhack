<?php 
 session_start();
 require_once('db.php');
 if(isset($_GET)){
if(isset($_GET['emotion'])){
$_SESSION['emotion'] = $_GET['emotion'];
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
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
  <div class="dashboard-container">
    <div class="activities-container">
      <div class="activities-heading" style="width:99.5%;">Recommended activities</div>
      <div class="activities">
        <?php
      $emotion=$_SESSION['emotion'];
      $query = "SELECT * FROM `$emotion`";
      $result = $connection->query($query);
      while ($row = $result->fetch_assoc()){
        $task=$row['task'];
        echo "<div class='activity'>$task</div>";
      }
        ?>
      </div>
    </div>
    <div class="sub-dashboard">
      <div class="video-container" style="z-index: 1;">
        <div class="activities-heading" style="animation-delay: 0.5s; font-size: 20px; height:11.5vh">Mentors that may solve you problem</div>
        <div class="others">
          <div class="other">
            <div style="border-color:rgb(31, 184, 0)"class="pic">
              <img src="https://www.logolynx.com/images/logolynx/e0/e0c16f4356ff503bf0173e3fdaebbd31.png" alt="">
            </div>
            <a href='' class="connect-btn">Connect</a>
          </div>
          <div class="other">
            <div style="border-color:rgb(31, 184, 0)" class="pic">
            <img src="https://www.logolynx.com/images/logolynx/e0/e0c16f4356ff503bf0173e3fdaebbd31.png" alt="">
            </div>
            <a href='' class="connect-btn">Connect</a>
          </div>
          <div class="other">
            <div style="border-color:rgb(31, 184, 0)" class="pic">
            <img src="https://www.logolynx.com/images/logolynx/e0/e0c16f4356ff503bf0173e3fdaebbd31.png" alt="">
            </div>
            <a href='' class="connect-btn">Connect</a>
          </div>
        </div>
      </div>
      <div class="others-container">
        <div class="activities-heading" style="animation-delay: 0.7s; font-size: 20px;">Patients that had similar feelings like you</div>
        <div class="others">
          <div class="other">
            <div class="pic">
              <img src="http://simple4marry.com/assets/extra-images/male.png" alt="">
            </div>
            <a href='chat.php' target="_blank" class="url">#1562376</a>
          </div>
          <div class="other">
            <div class="pic">
            <img src="http://simple4marry.com/assets/extra-images/male.png" alt="">
            </div>
            <a href='chat.php' target="_blank" class="url">#6367635</a>
          </div>
          <div class="other">
            <div class="pic">
            <img src="http://simple4marry.com/assets/extra-images/male.png" alt="">
            </div>
            <a href='chat.php'  target="_blank" class="url">#5128797</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
