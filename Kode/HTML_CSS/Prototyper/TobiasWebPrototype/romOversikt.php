<?PHP

session_start();

if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != '')) {

header ("Location: index.php");

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

		<table class="table">
			
         <!-- SØKEBAR FOR DATO -->
   <caption><div class="well"><h1 class="h1Midtstilt">Reservasjon av grupperom</h1>
      <div class="container midtstill">
         <div class='col-md-5 inlineBlock'>

            <!-- h4 HEADER MED DATEPICKER MARKUP OG SCRIPT NR: 1 -->
               <h4>Fra 
               <div class="form-group">
                  <div class='input-group date' id='datetimepicker6'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>

            <script type="text/javascript">
               $(function () {
                  $('#datetimepicker6').datetimepicker();
                  $("#datetimepicker7").on("dp.change",function (e) {
                     $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                  });
               });
            </script> 
            </h4>

         <div class='col-md-5'>
            <h4>Til
            <div class="form-group">
               <div class='input-group date' id='datetimepicker7'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
               </div>
            </div>
         </div>
      </div>

         <script type="text/javascript">
            $(function () {
               $('#datetimepicker6').datetimepicker();
               $("#datetimepicker7").on("dp.change",function (e) {
               $('#datetimepicker6').data("DateTimePicker").minDate(e.date);
               });
            });
         </script>
         </h4>
      
   </div>
</caption>
   <thead>

      <tr>
         <th><div class="well">Rom</div></th>
         <th><div class="well">08:00 - 11:00</div></th>
         <th><div class="well">11:00 - 14:00</div></th>
         <th><div class="well">14:00 - 17:00</div></th>
         <th><div class="well">17:00 - 20:00</div></th>
         <th><div class="well">20:00 - 23:00</div></th>
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
<a href="velgDato.html" class="btn btn-info btn-lg">NESTE SIDE</a>
	</div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/npm.js"></script>
<script src="js/html5shiv.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>	
</html>