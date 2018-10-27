<?php
session_start();
require_once('db.php');
require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
# Setting your API key
set_api_key("SqohU2ZpR8OFy33GOXP7vB5naKWTwIzF3bojA7OKeR0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/feelingForm.css">
</head>
<body>
  <div class="form-heading">Breif Questionare</div>
  
  <form class="form" method="post" action="action.php">
    <div class="inputField">
      <div class="ques">I have been dealing with problems</div>
      <div class="options">
        <label class="option">
          <input type="radio" name="q1" value="rare">Rare
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="often">Often
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="always">Always 
          <span class="checkmark"></span>
        </label>
      </div>
    </div>

    <div class="inputField">
      <div class="ques">I have been thinking clearly</div>
      <div class="options">
        <label class="option">
          <input type="radio" name="q1" value="rare">Rare
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="often">Often
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="always">Always 
          <span class="checkmark"></span>
        </label>
      </div>
    </div>

    <div class="inputField">
      <div class="ques">I have been feeling close to other people</div>
      <div class="options">
        <label class="option">
          <input type="radio" name="q1" value="rare">Rare
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="often">Often
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="always">Always 
          <span class="checkmark"></span>
        </label>
      </div>
    </div>

    <div class="inputField">
      <div class="ques">I have been able to makeup my own mind about things</div>
      <div class="options">
        <label class="option">
          <input type="radio" name="q1" value="rare">Rare
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="often">Often
          <span class="checkmark"></span>
        </label>
        <label class="option">
          <input type="radio" name="q1" value="always">Always 
          <span class="checkmark"></span>
        </label>
      </div>
    </div>

    <button class="submit-btn" id="capture" type="submit">SUBMIT</button>
    <textarea name="img-data" id="img-text" style=""></textarea>
  </form>
  <div class="booth" style="display:none;">
    <video id="video" height="300" width="400"></video>
    <a href="#" class="booth-capture-button">Take Photo</a>
    <canvas id="canvas" width="400" height="300"></canvas>
    <img src="" alt="photo of you" id="photo">
</div>
<textarea name="img-data" id="img-text" style="display:none;"></textarea>
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/photo.js"></script>
</body>
</html>