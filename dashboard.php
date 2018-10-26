<?php 
 session_start();
 require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
      <div class="video-container" style="z-index: 1">
        <div class="activities-heading" style="animation-delay: 0.5s; font-size: 20px;">Mentors that may solve you problem</div>
      </div>
      <div class="others">
        <div class="activities-heading" style="animation-delay: 0.7s; font-size: 20px;">Patients that had similar feelings like you</div>
      </div>
    </div>
  </div>
</body>
</html>