
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cortinados Alejandra</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style2.css"> 
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery-ui-1.8.13.custom.css"> 
	<link href="http://fonts.googleapis.com/css?family=Asap:400,700" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script> 
	$(function() {
		function log( message ) {
			
			 $("#log").val(message);

			$( "#log" ).scrollTop( 0 );
			
		}

		$( "#cliente" ).autocomplete({
			source: "controller/buscar-autocompletar.php",
			minLength: 2,
			select: function( event, ui ) {
				log( ui.item ?
					ui.item.label2 :
					"Nothing selected, input was " + this.label2 );
				

				var user = ui.item.label2;

		$(document).ready(function(){

	$("#cliente").bind( "mouseenter mouseleave blur keydown keypress keyup live load", function(){		
   




	//donde se mostrará el resultado de los productos 
	var singleValues = $( "#log" ).val();
    var cliente_var = $( "#cliente" ).val();
 if (cliente_var == "") {  $("#log").val('0');



  }

   $.ajax({
     type: 'post',
     url: 'fetch_telefono.php',
     data: {
       get_option:singleValues
     },
     success: function (response) {
       document.getElementById("datos").innerHTML=response; 
     }
   });

   $.ajax({
     type: 'post',
     url: 'fetch_direccion.php',
     data: {
       get_option:singleValues
     },
     success: function (response) {
       document.getElementById("datos2").innerHTML=response; 
     }
   });

       
    });

});
			}

		});

	});





  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
		<style>
	.ui-autocomplete-loading { background: white url('bigLoader.gif') right center no-repeat; }
	</style>

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
			<a href="salir.php" class="navbar-brand">Cerrar Sesion</a>
		</div>
		
	</div>
</nav>








<h2>Confirmar Presupuesto</h2>


	<form action="modificarsql.php" method="post">




<div class="form-group">

<div id="old_cliente">


		<label for="cliente">Nombre del cliente</label>
		<input type="text" class="form-control" id="cliente" placeholder="Juan Perez" name="cliente" value=""> 
		<br>
<button type="button" onclick="boton_newCliente();" class="btn btn-default btn-sm">Ingresar Nuevo Cliente</button>		
		</div>

<div id="new_cliente" style="display:none";">

		<label for="cliente">Nombre</label>
		<input type="text" style="width: 180px;" class="form-control" id="cliente_nombre" placeholder="Juan" name="nombre" value="">
		<label for="cliente">Apellido</label>
		<input type="text" style="width: 180px;" class="form-control" id="cliente_apellido" placeholder="Perez" name="apellido" value="">
		<br>
<button type="button" onclick="boton_oldCliente();" class="btn btn-default btn-sm">Seleccionar un cliente ya guardado</button>

		
	
</div>		
		
		
<input type="hidden" class="form-control" id="log"  name="log" value="">
</div>






<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Telefono</a></li>
    <li><a href="#tabs-2">Dirección</a></li>
    
  </ul>
  <div id="tabs-1">
    <div id="datos"> <input id="tele_nuevo" value=""> </div>
  </div>
  <div id="tabs-2">
<div id="datos2"> <input id="dire_nuevo" value="">  </div>
  </div>

</div> <br>







	 



<div class="form-group">
		<label for="precio">Viaticos (opcional)</label>
		<input type="number" class="form-control" id="viaticos" placeholder="0 $" name="viaticos" value="">
		
	  </div>		  
	  
	  
<a class="btn btn-default" type="button" onclick="altaDatosP();"  value="Agregar Cortina"/> Confirmar Presupuesto</a>
   <br> <br>
	
	</form> <br> 

 	

	  <div id="loading" ></div>
  <div id="content" ></div>
  
</div>


 </div> 
</div> 
<div id="push"></div>
</div> 
<footer><div class="container"></div></footer>

</body>
</html>