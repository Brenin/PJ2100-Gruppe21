<?PHP

session_start();

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {

header ("Location: index.html");

}

?>

<!-- Side 5 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<!--	STILARK		-->
		<link rel="stylesheet" type="text/css" href="css/generellStil.css">
		<link rel="stylesheet" type="text/css" href="css/kalender.css">
		<link rel="stylesheet" type="text/css" href="css/navBar.css">
		<link rel="stylesheet" type="text/css" href="css/reservasjonsbekreftelse.css">

		<!--	FONTER		-->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

	</head>
<body>

<!--      STATISK NAVIGASJONSBAR SOM INDIKERER HVILKET STEG I PROSESSEN MAN ER     -->
<section class="statiskMeny">
   <div class="navBar">

      <!--        LINKER TIL HVER SIDE I PROSESSEN      -->
      <ul class="topics">
         <li><img src="bilder/logo.jpg" class="logo"></img></li>
         <li><a href="login.html" class="loginFarge">Kalender</a></li>
         <li><a href="sok.html" class="sokFarge">Søk</a></li>
         <li><a href="kalender.html" class="kalenderFarge">Ledige</a></li>
         <li><a href="ferdig.html" class="ferdigFarge">Bekreftelse</a></li>
      </ul>
      
      <ul class="hoyreMeny">
         <li><a href="">
         <?php 

         echo $_SESSION['username'];

         ?>
         </li></a>
         <li><a href="destroy.php">Log Ut</a></li>
         <li><img src="bilder/spm.png"></img></li>
      </ul>
      <hr>
   </div>
</section>


 <!--        BOKS MED BEKREFTELSE PÅ RESERVASJON AV GRUPPEROM     -->
<div class="container" id="bekreftelsesLogo">
	<div class="wrapper" id="hoyde">
	<div id="gronnBoks">
		
			<h2>Suksess!</h2><br>
			<h5 id="linje">Du har reservert<h5>
			- Rom 302 - 01/02/03 - 10:00 - 13:00<br>
				- Rom 302 - 01/02/03 - 13:00 - 16:00</h5>
				<div id="hoyrePilogTekst">Hjem<img src="bilder/pil.png"></img>
		</div>
	</div>
	</div>
</div>

</body>
</html>







