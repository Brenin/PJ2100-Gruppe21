<!-- Side 4 -->
<!DOCTYE html>
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

      <!--        LINKER TIL HVER SIDE I PROSESSEN      -->
      <ul class="topics">
         <li><img src="bilder/logo.jpg" class="logo"></img></li>
         <li><a href="login.html" class="loginFarge">Kalender</a></li>
         <li><a href="sok.html" class="sokFarge">Søk</a></li>
         <li><a href="kalender.html" class="kalenderFarge">Ledige</a></li>
         <li><a href="ferdig.html" class="ferdigFarge">Bekreftelse</a></li>
      </ul>
      <hr>
   </div>
</section>


<!--        "CONTAINER" FOR SAMMKJØRT STRUKTUR IGJENNOM SIDENE      -->
<div class="container">
<div class="wrapper">


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
               <td>
                  <?php

                  $db = new PDO('mysql:host=localhost;dbname=westerdals', 'root', '');
                  $sql = 'SELECT * from rooms where Room_ID="81" and Value="0" 
                           and Date="2015-03-22" and Time="09-12"';

                     foreach ($db->query($sql) as $row) {
                        Echo "<html>"; 
                        Echo "<div class=div>Ledig</div>";
                     }
                  ?>
       
               </td>
               <td>
                  <?php
                  $db = new PDO('mysql:host=localhost;dbname=westerdals', 'root', '');
                  $sql = 'SELECT * from rooms where Room_ID="81" and Value="0" 
                           and Date="2015-03-22" and Time="12-15"';

                     foreach ($db->query($sql) as $row) {
                        Echo "<html>"; 
                        Echo "<div class=div>Ledig</div>";
                     }
                  ?>
               </td>
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
   </section>
   </div>
</div>
</body>
</html>

<style>
.div {
   width: 10rem;
   height: 2rem;
   border: 1px solid #fdfef8;
   text-align: center;
   border-radius: 5px;
   background-color: #90EE90;
   -webkit-transition: all 0.2s ease;
   transition: all 0.2s ease;
}

.div:hover {
   background-color: #86e486;
   border: 1px solid #bbb;
}
