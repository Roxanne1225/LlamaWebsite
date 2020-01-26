<?php
session_start();

require_once('../../private/initialize.php');

$db = db_connect();

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
	$pass_input = $_POST['password'];
	$user_input = $_POST['username'];

//prepare the statement to prevent injection
	$sql = "SELECT id, password FROM quizaccount WHERE username = ?";
	$stmt = mysqli_prepare($db, $sql);
	mysqli_stmt_bind_param($stmt, 's', $user_input);

	mysqli_stmt_execute($stmt);
// Store the result so we can check if the account exists in the database.
	//$stmt->store_result();
	mysqli_stmt_store_result($stmt);
//check that the user name is indeed in the database;
//mysqli_stmt_num_rows() is intended to be used with a mysqli_stmt object (as returned by mysqli_prepare()).
	if(mysqli_stmt_num_rows($stmt)>0){
	mysqli_stmt_bind_result($stmt, $id, $data_password);
	//Fetch the result from a prepared statement into the variables bound by mysqli_stmt_bind_result().
	mysqli_stmt_fetch($stmt);
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	// if(password_verify($pass_input, $data_password)){
	if($data_password == $pass_input){
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
		header('location: '.url_for('quizmain.php'));
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
	// In essence, calling $stmt->close() will provide the same effect as calling $stmt->free_result() since it cancels the result set as well. But calling $stmt->free_result() will not clear out the memory used by the prepared statement in which case you must use $stmt->close().
	mysqli_stmt_close($stmt);

?>
