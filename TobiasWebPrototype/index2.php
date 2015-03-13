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
	<title>CK32</title>
	<meta name="description" content="booking">
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">

	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css"> -->

	</head>
	<body>
		<form method="post" action="index2.php">
			Username: <input type="text" class="form-control" id="inputEmail" placeholder="Epost" name="user">
			Password: <input type="password" class="form-control" id="inputPassword" placeholder="Passord" name="pass">
			<input type="submit" class="btn btn-primary" value="submit" name="submit">Log In</input>
	</body>
	
</html>