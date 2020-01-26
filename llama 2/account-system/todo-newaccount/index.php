<?php include('create.php'); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>New Account</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="../error_style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Creat New Account</h1>
			<form action="index.php" method="post">

        <label for="username">
          <i class="fas fa-user"></i>
        </label>

        <div <?php if (isset($username_error)): ?> class="form_error" <?php endif ?> >
        <input type="text" name="username" placeholder="Username" id="username" required>

</div>

        <label for="password">
          <i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" name = 'submit'value="Create">

			</form>

              <?php if (isset($username_error)): ?>
      	  	<span><?php echo $username_error; ?></span>
      	  <?php endif ?>
			<div class="newaccount">
				<a href= <?php echo url_for("account-system/todologin/index.php"); ?>>Already Have an Account?</a>
			</div>
		</div>

	</body>
</html>
