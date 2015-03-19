<?PHP

session_start();

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {

header ("Location: index.html");

}

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">

      <!--        STILARK     -->
      <link rel="stylesheet" type="text/css" href="css/navBar.css">
      <link rel="stylesheet" type="text/css" href="css/generellStil.css">
      <link rel="stylesheet" type="text/css" href="css/personerOgProsjektor3Final.css">

      <!--        FONTER      -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

      <link rel="shortcut icon" href="bilder/favicon.ico">

   </head>
<body>


<!--      STATISK NAVIGASJONSBAR SOM INDIKERER HVILKET STEG I PROSESSEN MAN ER     -->
<section class="statiskMeny">
   <div class="container">
    <div class="navBar">

      <!--        LINKER TIL HVER SIDE I PROSESSEN      -->
      <ul class="topics">
         <li><img src="bilder/logo.jpg" class="logo" /></li>
         <li><a href="kalender.php" class="loginFarge">Kalender</a></li>
         <li><a href="" class="sokFarge">Søk</a></li>
         <li><a href="" class="kalenderFarge">Ledige</a></li>
         <li><a href="reservasjonsbekreftelse.php" class="ferdigFarge">Bekreftelse</a></li>
      </ul>
      
      <ul class="hoyreMeny">
      <li> <a href="">
        <?php 

        echo $_SESSION['username'];

        ?>
         </a></li>
         <li><a href="destroy.php">Logg Ut</a></li>
         <li><img src="bilder/spm.png" /></li>
      </ul>
      <hr>
   </div>
    </div>
</section>
    
    
    <!--        SØKEDELEN AV SIDEN      -->
<section id="søk">
    <div class="container">
        <div class="wrapperToBokser">
            <div id="boksene2">
                <!--        BOKS MED BESKRIVELSE AV SIDEN      -->
                <div class="westerdalsBoks" id="beskrivelse">
                    <h1>Velg romtype og søk</h1>
                    <p>
                        Velg hvor mange som skal bruke grupperommet, <br> i tillegg til om dere trenger prosjektor, og trykk "Velg."  
                        <br><br>
                        Etter valget, trykk på "Søk!" for å se oversikt over ledige rom.
                    </p>                           
                </div>
        
            <!--        FORM SOM SENDER DATA TIL PHP-DATABASEN OG GIR BRUKER MULIGHET FOR Å VELGE TYPE ROM OG MED/UTEN PROSJEKTOR      -->
            
                <div class="westerdalsBoks" id="personerOgProsjektor">
                    
                    <!--        SEKSJON MED VALG AV ANTALL PERSONER OG BEHOV FOR PROSJEKTOR I FORM AV RADIO INPUTS      -->

                        <form action="" method="">
                        <label for="size" id="label1">Hvor mange er dere?</label>
                        <br>
                        <input type="radio" name="size" class="personer" value="2" />To
                        <br>
                        <input type="radio" name="size" class="personer" value="3" />Tre
                        <br>
                        <input type="radio" name="size" class="personer" value="4" />Fire<br><br>
                        <label for="equipment" id="label2">Trenger dere prosjektor?</label>
                        <br><p></p>
                        <input type="radio" name="size" class="equipment" value="ja" />Ja
                        <br>
                        <input type="radio" name="size" class="equipment" value="nei" />Nei
                        <br>
                        <input type="submit" value="Velg" name="submit" id="velger" />
                            </form>
                 
                </div>
            
            </div>
        </div>
        </div>
    </section>
    <!--        VIDERE-KNAPP SOM LEDER TIL NESTE SIDE (KALENDER.HTML)      -->
                <div id="knapp">
                    <a href="kalender.html"><button name="Søk!" name="submit" id="videre" >Søk!</button></a>
                </div>

    </body>
</html>