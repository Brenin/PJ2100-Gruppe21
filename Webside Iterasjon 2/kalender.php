<?PHP

session_start();

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {

header ("Location: index.html");

}

?>

<!-- Side 4 -->
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
      <link rel="shortcut icon" href="bilder/favicon.ico">

   </head>
<body>


<!--      STATISK NAVIGASJONSBAR SOM INDIKERER HVILKET STEG I PROSESSEN MAN ER     -->
<section class="statiskMeny">
   <div class="navBar">

      <!--        LINKER TIL HVER SIDE I PROSESSEN      -->
      <ul class="topics">
         <li><img src="bilder/logo.jpg" class="logo"></img></li>
         <li><a href="kalender.php" class="loginFarge">Kalender</a></li>
         <li><a href="" class="sokFarge">Søk</a></li>
         <li><a href="kalender.php" class="kalenderFarge">Ledige</a></li>
         <li><a href="reservasjonsbekreftelse.php" class="ferdigFarge">Bekreftelse</a></li>
      </ul>
      
      <ul class="hoyreMeny">
         <li> <a href="">
         <?php 

         echo $_SESSION['username'];

         ?>
         </li></a>
         <li><a href="destroy.php">Logg Ut</a></li>
         <li><img src="bilder/spm.png"></img></li>
      </ul>
      <hr>
   </div>
</section>

<!--        "CONTAINER" FOR SAMMKJØRT STRUKTUR IGJENNOM SIDENE      -->
<div class="container">
   <div class="wrapper">

<!--     -->
   <div class="well">

      <form action="#" method="post">
       <h4 id="datoFarge">Dato <input type="text" placeholder="01-02-15"/>
       <input type="submit" value="Søk"/></h4> 

</form>

   </div>

<!--        EGENSKAPER FOR KALENDERFUNKSJONEN        -->
   <section id="kalender">
      <table>
         <thead>
            <tr>
               <th>Rom</th>
               <th>08:00 - 11:00</th>
               <th>11:00 - 14:00</th>
               <th>14:00 - 17:00</th>
               <th>17:00 - 20:00</th>
               <th>20:00 - 23:00</th>
            </tr>
         </thead>
         <tbody>
           <tr class="well">
               <td class="active">301</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
            </tr>
            <tr class="well">
               <td class="active">302</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
            </tr>
            <tr class="well">
               <td class="active">303</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
            </tr>
            <tr class="well">
               <td class="active">401</td>
               
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
            </tr>
            <tr class="well">
               <td class="active">301</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
            </tr>

            <tr class="well">
               <td class="active">302</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
            </tr>
            <tr class="well">
               <td class="active">303</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
            </tr>
            <tr class="well">
               <td class="active">401</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="success">Ledig</td>
               <td class="danger">Optatt</td>
               <td class="danger">Optatt</td>
            </tr>
         </tbody>
      </table>
      <!--     -->
      <div id="hoyre">
         <form action="#" method="post">
         <h4 id="stor">
         <a href="reservasjonsbekreftelse.php">
            <input type="submit" value="Reserver" id="gronn"/>
            </a>
            </h4>
         </form>
         </div>
   </section>
   </div>
   </div>
</div>
</body>
</html>