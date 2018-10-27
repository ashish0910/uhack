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
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <style>
  a{
    text-decoration: none ;
  }
  </style>
</head>
<body>
  <div class="jk-container">
    <div class="heading">
      <h1>How do you feel today?</h1>
    </div>
    
    <div class="options">
    <a href="form.php?emotion=Happy"> 
    <div class="option"><span class="option-text" style="z-index:2">Happy</span>
        <img src="http://yourdost-blog-images.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2016/03/25124217/happy-man.jpg" alt="" class="option-img">
      </div>
      </a>
      <!-- <a href="dashboard.php?emotion=Sad" style="position: absolute ;">
      <div class="option">
        <span class="option-text" style="z-index:2">Sad</span>
        <img src="https://3.bp.blogspot.com/-DrJqKERcZBE/V0me8N3-cKI/AAAAAAAAJSg/S2akaVFb8_Avf4nsfFqFa1k54gTPM3y4wCLcB/s1600/sad-images-10.jpg" alt="" class="option-img" />
      </div>
      </a> -->
      <!-- <a href="dashboard.php?emotion=Sad" style="position: absolute ;">
      <div class="option">
        <span class="option-text" style="z-index:2">Sad</span>
        <img src="https://3.bp.blogspot.com/-DrJqKERcZBE/V0me8N3-cKI/AAAAAAAAJSg/S2akaVFb8_Avf4nsfFqFa1k54gTPM3y4wCLcB/s1600/sad-images-10.jpg" alt="" class="option-img" />
      </div>
      </a> -->
      <a href="form.php?emotion=Disgust">
      <div class="option">
        <span style="z-index:2" class="option-text">Disgust</span>
        <img src="http://thesocialrush.com/wp-content/uploads/2018/03/images-1-1.jpeg" alt="" class="option-img">
      </div>
      </a>
      <a href="form.php?emotion=Angry">
      <div class="option">
        <span style="z-index:2" class="option-text">Angry</span>
        <img src="https://images.medicaldaily.com/sites/medicaldaily.com/files/styles/headline/public/2014/05/21/anger.jpg" alt="" class="option-img">
      </div>
      </a>
      <a href="form.php?emotion=Neutral">
      <div class="option">
        <span class="option-text" style="z-index:2">Neutral</span>
        <img src="https://i.ytimg.com/vi/7luz5pQ0gko/maxresdefault.jpg" alt="" class="option-img">
      </div>
      </a>
      <a href="form.php?emotion=Surprise">
      <div class="option">
        <span class="option-text" style="z-index:2">Surprise</span>
        <img src="https://theactivevoice.com/wp-content/uploads/2016/08/ThinkstockPhotos-178062396-1024x683.jpg" alt="" class="option-img">
      </div>
      </a>
      <a href="form.php?emotion=Fear">
      <div class="option">
        <span class="option-text" style="z-index:2">Fear</span>
        <img src="https://www.midlandscbd.com/uploads/news-pictures/742-columbia-blog-post-image-20160712224917.jpeg" alt="" class="option-img">
      </div>
      </a>
      <a href="form.php?emotion=Sad">
      <div class="option">
        <span class="option-text" style="z-index:2">Sad</span>
        <img src="https://3.bp.blogspot.com/-DrJqKERcZBE/V0me8N3-cKI/AAAAAAAAJSg/S2akaVFb8_Avf4nsfFqFa1k54gTPM3y4wCLcB/s1600/sad-images-10.jpg" alt="" class="option-img">
      </div>
      </a>
    </div>
    <div class="not-sure">
     <a href="emotion.php" target="_blank" style="text-decoration:none; color: white !important;">I am not sure of my emotion. Please help me</a>
    </div>
  </div>
</body>
</html>