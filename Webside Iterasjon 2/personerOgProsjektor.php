<?PHP

session_start();

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {

header ("Location: index.php");

}

?>

<!-- Side 3 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<!--	STILARK		-->
		<link rel="stylesheet" type="text/css" href="css/generellStil.css">
		<link rel="stylesheet" type="text/css" href="css/bokser.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/kalender.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="stylesheet" type="text/css" href="css/navBar.css">
		<link rel="stylesheet" type="text/css" href="css/personerOgProsjektor.css">
		<link rel="stylesheet" type="text/css" href="css/reservasjonsbekreftelse.css">

		<!--	FONTER		-->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

	</head>
<body>





</body>
</html>