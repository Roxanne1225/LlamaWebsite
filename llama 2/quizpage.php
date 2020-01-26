<?php
session_start();

require_once 'private/initialize.php';


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Take the quiz about about llama!</title>
    <link rel="stylesheet" href="quiz-style.css">
  </head>
  <body>
     <div class="before-login">
    <?php if(isset($_SESSION['loggedin'])){ ?>
    <a href="">Welcome, <?php echo $_SESSION['name']; ?>! (logout)</a>
    <?php header('location: '.url_for('quizmain.php')) ?>
    <?php } ?>

    <div class="login">
      Want to store your results?</br>
      <a href=<?php echo url_for("account-system/todologin/index.php") ?>>Login!</a>
    </div>

    <div class="guest">
      <a href= <?php echo url_for("quizmain.php") ?>>Continue as guest</a>
    </div>
    
    </div>

  </body>
</html>
