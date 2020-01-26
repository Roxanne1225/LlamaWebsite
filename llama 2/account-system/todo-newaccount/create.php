<?php
session_start();

require_once('../../private/initialize.php');

if(isset($_POST['submit'])){
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

	$pass_input = $_POST['password'];
	$user_input = $_POST['username'];


  //check if the user name is already taken
  $sql = "SELECT id, password FROM quizaccount WHERE username = ?";
  $stmt = mysqli_prepare($db, $sql);
  mysqli_stmt_bind_param($stmt, 's', $user_input);

  	mysqli_stmt_execute($stmt);
  // Store the result so we can check if the account exists in the database.
  	mysqli_stmt_store_result($stmt);
  //mysqli_stmt_num_rows() is intended to be used with a mysqli_stmt object (as returned by mysqli_prepare()).
  	if(mysqli_stmt_num_rows($stmt)!=0){
    $username_error = "Username Already Taken!";
}
		if(!isset($username_error)){
			$sql = "INSERT INTO accounts (username, password) VALUES(?,?)";
		  $stmt = mysqli_prepare($db, $sql);
		  mysqli_stmt_bind_param($stmt, 'ss', $user_input, $pass_input);

		  	mysqli_stmt_execute($stmt);

						session_regenerate_id();
						$_SESSION['loggedin'] = TRUE;
						$_SESSION['name'] = $_POST['username'];
					header('location: '.url_for('quizpage.php'));

}

	mysqli_stmt_close($stmt);

}


?>
