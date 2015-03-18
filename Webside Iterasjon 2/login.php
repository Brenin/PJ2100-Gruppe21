<?php

  include_once("user.php");

  if (isset($_POST["submit"])) {
    $Email = $_POST["user"];
    $Password = $_POST["pass"];

    $object = new User();
    $object->oliibe14($Email, $Password);
  }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">

      <!--        STILARK     -->
      <link rel="stylesheet" type="text/css" href="css/generellStil.css">
      <link rel="stylesheet" type="text/css" href="css/bokser.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" type="text/css" href="css/kalender.css">
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <link rel="stylesheet" type="text/css" href="css/navBar.css">
      <link rel="stylesheet" type="text/css" href="css/personerOgProsjektor.css">
      <link rel="stylesheet" type="text/css" href="css/reservasjonsbekreftelse.css">

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
         <li class="kalender"><a href="login.php">Kalender</a></li>
         <li><a href="sok.html" >Søk</a></li>
         <li><a href="kalender.html">Ledige</a></li>
         <li><a href="ferdig.html">Bekreftelse</a></li>
      </ul>
      <hr>
   </div>
</section>


        
    <section id="login">
    
    <div id="loginFelt" class="container">
        
        <div id="innlogging">
            <h1>LOGG INN</h1>
            <form action="index.html" method="post">
                <label for="skoleMail">Student Epost</label>
                <input type="text" id="skoleMail" placeholder="person@student.westerdals.no" name="user"><br><br>
                <label for="passord">Passord</label>
                <input type="password" id="passord" placeholder="Passord" name="pass"><br>
                <input type="submit" id="send" value="Logg inn" href="personerOgProsjektor.html" name="submit">
            
            </form>  
            </div>
        
    
    
        </div>
        </section>