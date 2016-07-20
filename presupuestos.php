
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

<a href="index.php"><button type="button" class="btn btn-info">Nuevo presupuesto</button></a>

<h2>Presupuesto </h2>


<?php

	
	require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getPresupuestos();
	
	if ($productoOK){

		echo '<table class="table table-striped">
				<tr class="active">
					<td>Cliente</td>
					<td>Número de presupuesto</td>
					<td>Unidades</td>
					<td>Sub Total</td>
					<td>Viaticos</td>
					<td>Total</td>
					
					<td>fecha</td>
					<td colspan="2">Operaciones</td>
				</tr>'; 
		for ($i=0;$i<count($productoOK);$i++){
			$total_FINAL=$productoOK[$i]['total'] + $productoOK[$i]['viaticos'];
			
			echo '<tr >
					<td>'.$productoOK[$i]['cliente'].'</td>
					<td>'.$productoOK[$i]['id_presu'].'</td>
					
					 <td>'.$productoOK[$i]['unidades'].'</td>
					 <td>'.$productoOK[$i]['total'].'</td>
					 <td>'.$productoOK[$i]['viaticos'].'</td>
					<td>'.$total_FINAL.'</td>
					
					 <td>'.$productoOK[$i]['fecha'].'</td> 
					<td><a href="presupuesto_detalle.php?id='.$productoOK[$i]['id_presu'].'"><button type="button" class="btn btn-info">Ver</button></a></td>
					<td><a href="eliminar_presu.php?id='.$productoOK[$i]['id_presu'].'" onclick="if(!confirm(\'Se borrará el presupuesto seleccionado\'))return false"><button type="button" class="btn btn-info">Eliminar</button></a></td>
					<td><a href="controller/edit_presu.php?id='.$productoOK[$i]['id_presu'].'" onclick="if(!confirm(\'Se prepapara para editar presupuesto seleccionado\'))return false"><button type="button" class="btn btn-info">Editar</button></a></td>
				</tr>';
			
		}
		echo '</table>';
	}
	else{
		echo 'Aún no hay datos ingresados';
	}


?>
</div>
</div> 
<div id="push"></div>
</div> 
<footer><div class="container">Este es el pie de página</div></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>