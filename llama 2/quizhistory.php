<?php

require_once 'private/initialize.php';
session_start();

if ( isset($_SESSION["name"]) ) {

  $username = $_SESSION["name"];
  $sql = "SELECT correctness FROM quizaccount WHERE username = ?";
  $stmt = mysqli_prepare($db, $sql);
  mysqli_stmt_bind_param($stmt, 's', $username);
  mysqli_execute($stmt);
  mysqli_stmt_bind_result($stmt, $cu);
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>History Result</title>
  </head>
  <body>
    <?php if(!isset($_SESSION["loggedin"])){?>
      <a href="todologin/index.php">Login</a> to see your history results!
<?php } else{?>
      <div class="result">
        Hi! <?php echo $username ?>, you answered <?php echo $cu ?> questions right!(best result)
      </div>

<?php } ?>
  </body>
</html>
