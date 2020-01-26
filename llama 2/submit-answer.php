<?php
require_once 'private/initialize.php';
session_start();
$correct = $_POST["correctness"];


if(isset($_POST['submit'])){
if ( isset($_SESSION["name"]) ) {
  $username = $_SESSION["name"];
  $sql = "SELECT correctness FROM quizaccount WHERE username = ?";
  $stmt = mysqli_prepare($db, $sql);
  mysqli_stmt_bind_param($stmt, 's', $username);
  mysqli_execute($stmt);
  mysqli_stmt_bind_result($stmt, $currentcorrect);
  mysqli_close($db);

  //if no correcness data is stored previously or this is not the best result
$db = db_connect();
if($currentcorrect == null or $currentcorrect < $correct){

    $sqls = "UPDATE quizaccount SET correctness = ? WHERE username = ?";
    // echo $db;
    $stmts = mysqli_prepare($db, $sqls)or die ($db);;
    mysqli_stmt_bind_param($stmts, 'is',$correct, $username);

      mysqli_stmt_execute($stmts);
 }


}
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Score</title>
    <link rel="stylesheet" href="quiz-style.css">
  </head>
  <body>
    <?php if(isset($_SESSION["loggedin"])){ ?>

    <a href="quizhistory.php">See your history score!</a>
  <?php } ?>
    <h1>Your Results</h1>
    <div class="score">
      Congratulations! You got <?php echo $correct ?> questions correct!
    </div>
  </body>
</html>
