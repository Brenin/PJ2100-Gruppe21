<?php

	include_once("user.php");

	if (isset($_POST["submit"])) {
		$Student_ID = $_POST["user"];
		$Password = $_POST["pass"];

		$object = new User();
		$object->westerdals($Student_ID, $Password);
	}
?>

<html>

	<head>
	</head>
	<body>
		<form method="post" action="index2.php">
			Username: <input type="text" name="user">
			Password: <input type="text" name="pass">
			<input type="submit" name="submit" value="login">
	</body>
	
</html>