<?php 
  session_start();
  if(isset($_POST)){
    if(isset($_POST['feedback'])){
      $_SESSION['feedback']=$_POST['feedback'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/form.css">
    <title>Document</title>
</head>
<body>
        <div class="container">  
                <form id="contact" action="form.php" method="post">
                  <h3>Feedback Form</h3>
                  <!-- <fieldset>
                    <input placeholder="Your name" type="radio" tabindex="1" required autofocus>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                  </fieldset>
                  <fieldset>
                    <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                  </fieldset> -->
                  <fieldset>
                    <textarea placeholder="Would you like to share anything with us..." name="feedback" tabindex="5"></textarea>
                  </fieldset>
                  <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                  </fieldset>
                  <fieldset>
                        <button name="submit" type="submit" id="contact-skip" data-submit="...Sending">Skip</button>
                  </fieldset>
                </form>
              </div>
    
</body>
</html>