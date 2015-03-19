<?php

  include_once("user.php");

  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    $object = new User();
    $object->oliibe14($username, $password);
    }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">

      <!--        STILARK     -->
      <link rel="stylesheet" type="text/css" href="css/generellStil.css">
      <link rel="stylesheet" type="text/css" href="css/login2.css">
      <link rel="stylesheet" type="text/css" href="css/navBar.css">

      <!--        FONTER      -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

   </head>
<body>



<!--      STATISK NAVIGASJONSBAR SOM INDIKERER HVILKET STEG I PROSESSEN MAN ER     -->
<section class="statiskMeny">
   <div class="navBar">
      <img src="bilder/logo.jpg" class="logo"></img>



      <!--        LINKER TIL HVER SIDE I PROSESSEN      -->
      <ul class="topics">
         <li class="kalender"><a href="login.html">Kalender</a></li>
         <li><a href="sok.html" >Søk</a></li>
         <li><a href="kalender.html">Ledige</a></li>
         <li><a href="ferdig.html">Bekreftelse</a></li>
      </ul>
      <hr>
   </div>
</section>

<section id="login">
    <div class="container">
        <div class="wrapper">
            <div class="westerdalsBoks" id="loginToPage">
                <h1>LOGG INN</h1>
                <form action="login.php" method="post">
                    <label for="skoleMail">Student Epost</label>
                    <input type="text" id="skoleMail" placeholder="person@student.westerdals.no" name="brukernavn" class="valg"><br><br><br>
                    <label for="passord">Passord</label>
                    <input type="password" id="passord" placeholder="Passord" name="pass" class="valg"><br>
                    <input type="submit" id="send" value="LOGG INN" href="personerOgProsjektor.php" name="submit" class="videre">
            
                </form>
            </div>
        </div>
    </div>
</section>

</html>