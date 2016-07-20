
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cortinados Alejandra</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style2.css">
	<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="funciones-ajax.js" type="text/javascript"></script>  
<script src="js/index.js"></script>  

</head>
<body>
<div id="wrap">  <div id="main"> 
<div class="container">
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">ABM Cortinas</a>
			
		</div>
		
	</div>
</nav>

<a href="presupuestos.php"><button type="button" class="btn btn-info">Presupuestos</button></a>

<h2>Detalle del Presupuesto</h2>




 	
	

	  <div id="loading" ></div>
 
  <?php
require 'controller/consulta_presu_detalle.php';
?>


</div>



</div> 
<div id="push"></div>
</div> 
<footer><div class="container"></div></footer>

</body>
</html>