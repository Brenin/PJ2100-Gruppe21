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
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/containere.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/kalender.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/navBar.css">
    <link rel="stylesheet" type="text/css" href="css/personerOgProsjektor.css">
    <link rel="stylesheet" type="text/css" href="css/reservasjonsbekreftelse.css">
    <script type="text/javascript" src="js/jQuery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    
<section id="header">
    <div id="logo">
    <img id="westerdals" src="bilder/logo2.jpg" />
    </div>

</section>    

<section id="infoOgBooking">
    <div class="bokser" id="infoOmBooking">
        <h4>Book grupperom på CK32</h4>
        <p>Velkommen til Booking av grupperom ved CK32. Klikk på "Book grupperom nå" for å reservere et grupperom.</p>
    </div>
    <a href="login.html"><div class="bokser" id="bookingBoks"><br>BOOK GRUPPEROM NÅ</div></a>
    
</section>
    
    <!-- FAQ-delen av siden. -->

<section id="faqSeksjon">
    <div id="beskrivelse">
    <h1>FAQ - Frequently Asked Questions</h1>
  <p>Trykk på spørsmålene for å se svar.</p>
  </div>
      <div id="faq">
  <section class="spørsmål">
    <span>Q: </span>Hvor lenge kan en booke et rom?
  </section>
  <section class="svar">
    <span>A: </span>En elev kan booke et rom intill 3 timer om gangen. 
  </section>
  
  <section class="spørsmål">
   <span>Q: </span>Hvor mange rom kan en booke?
  </section>
  <section class="svar">
   <span>A: </span>En kan booke ett rom om gangen!
  </section>
      
    <section class="spørsmål">
   <span>Q: </span>Hvor mange kan bruke et rom?
  </section>
  <section class="svar">
   <span>A: </span>Vi har rom for to, tre og fire personer.
  </section>
      
  <section class="spørsmål">
   <span>Q: </span>Hvordan vet jeg at bookingen var vellykket?
  </section>
  <section class="svar">
   <span>A: </span>Dersom bookingen var vellykket har du fått en mail på ItsLearning.
  </section>
      
      <section class="spørsmål">
   <span>Q: </span>Hvordan kan jeg booke et rom?
  </section>
  <section class="svar">
   <span>A: </span>Du kan booke et rom ved å gå inn på <a href="index.html">bookingsiden</a>, og trykke "Book grupperom".
  </section>
      
      <section class="spørsmål">
   <span>Q: </span>Kan jeg bruke rommet dersom de som har booket det ikke er der?
  </section>
  <section class="svar">
   <span>A: </span>Dersom rommet er booket men ikke blir brukt kan det brukes av hvem som helst til de som har booket det ankommer.
  </section>
      
      <section class="spørsmål">
   <span>Q: </span>Hva gjør man dersom noen nekter å forlate et rom de ikke har booket til de som har booket?
  </section>
  <section class="svar">
   <span>A: </span>I henhold til skolereglementet er slik oppførsel ikke godkjent, og vil dermed medføre en advarsel og/eller straff til den skyldige parten.
  </section>
      
      <section class="spørsmål">
   <span>Q: </span>Hvordan kansellerer man en booking?
  </section>
  <section class="svar">
   <span>A: </span>Man kan kanselere en booking ved  å gå inn på bookingen og «avbestille». 
  </section>
      
      <section class="spørsmål">
   <span>Q: </span>Hvordan re-booker jeg?
  </section>
  <section class="svar">
   <span>A: </span>Dersom du booker et nytt lokale vil du miste din eksisterende booking.
  </section>

          <!-- Div som fungerer som en knapp til hoversiden for booking, da hele diven er wrappet i en link til index.html. -->
  <a href="login.html"><div id="booking" class="bokser">
      <h1>Book grupperom nå!</h1>
      <p>Trykk her for å booke grupperom.</p></div></a>
  </div>
</div>
    

</section>

</body>


    

</html>