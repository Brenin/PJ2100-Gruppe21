<?php

	include_once("user.php");

	if (isset($_POST["submit"])) {
		$Email = $_POST["user"];
		$Password = $_POST["pass"];

		$object = new User();
		$object->westerdals($Email, $Password);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CK32</title>
	<meta name="description" content="booking">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="dude">
	<div class="container">

		<form action="login.php" method="post">
		    <div class="form-group">
		        <label for="inputEmail" style="color:white">Student Epost</label>
		        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="user">
		    </div>
		    <div class="form-group">
		        <label for="inputPassword" style="color:white">Passord</label>
		        <input type="password" class="form-control" id="inputPassword" placeholder="Passord" name="pass">
		    </div>
		   
		    
		    <input type="submit" class="btn btn-primary" value="submit" href="velgDato.html" name="submit">Log In</input>

		</form>
	</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/npm.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/bootstrap"></script>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>	
</html>