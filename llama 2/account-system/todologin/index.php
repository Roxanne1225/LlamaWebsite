<?php require_once '../../private/initialize.php'; ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="../style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
		<div class="back">
		<a href=<?php echo url_for('quizpage.php') ?>>	&larr; &nbsp; &nbsp; Go back to quiz</a>
		</div>
			<h1>Login</h1>

			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">

			</form>
			<div class="newaccount">
				<a href=<?php echo url_for("account-system/todo-newaccount/index.php") ?>>Create a New Account!</a>
			</div>
		</div>

	</body>
</html>
