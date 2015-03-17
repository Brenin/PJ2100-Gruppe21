<?php

	include_once("user.php");

	if (isset($_POST["submit"])) {
		$Email = $_POST["user"];
		$Password = $_POST["pass"];

		$object = new User();
		$object->oliibe14($Email, $Password);
	}
?>

<html>
	<head>
	<meta charset="utf-8">
	<title>Innlogging</title>
	<meta name="description" content="booking">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css"> 

	</head>
	<body>
		<div class="dude">
			<div class="container">
			<div class="well">
				<form method="post" action="index2.php">
					<h4>Username: <input type="text" class="form-control" id="inputEmail" placeholder="Epost" name="user"></h4>
					<h4>Password: <input type="password" class="form-control" id="inputPassword" placeholder="Passord" name="pass"></h4>
					<input type="submit" class="btn btn-primary" value="submit" name="submit">Log In</input>
			</div>
		</div>
	</div>



	<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/npm.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>