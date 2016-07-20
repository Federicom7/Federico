<?php

session_start();


   
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cortinados Demo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="clientes/css/styleC.css" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== 
	
	<script src="assets/plugins/pace/pace.min.js"></script>
	
	
	-->
	<!-- ================== END BASE JS ================== -->	

	<!-- ================== BEGIN BASE JS ================== -->

	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/DataTables/js/dataTables.responsive.js"></script>
	<script src="assets/js/table-manage-responsive.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	
	<!-- ================== END PAGE LEVEL JS ================== -->
<link href="dist/css/select2.min.css" />
<script src="dist/js/select2.js"></script>
	
		<!-- ================== CONFIRM PRESU ================== -->
		
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
	<script src="js/AutoComplete.js"></script>  	
		<style>
	.ui-autocomplete-loading { background: white url('bigLoader.gif') right center no-repeat; }
	</style>

<script src="js/index.js"></script>  
<!-- ================== END CONFIRM ================== -->
<script src="funciones-ajax.js" type="text/javascript"></script>
<script src="js/configuraciones.js" type="text/javascript"></script>

  

</head>
<body>
<div id="wrap">  <div id="main"> <div class="container"> 


			
			<!-- begin row -->
			<div class="row">
			    <!-- BOTONERA TAB -->
			   
					<ul class="nav nav-tabs">
					<li class="titulo">CORTINADOS-SYSTEM
</li>
						<li class="active"><a href="#default-tab-1" onclick="calcular_div();" data-toggle="tab">Nuevo presupuesto
</a></li>
						<li class=""><a href="#default-tab-2" data-toggle="tab">Presupuestos 

</a></li>
						<li class=""><a href="#default-tab-3" onclick="clientes_div();" data-toggle="tab">Clientes</a></li>
						<li class=""><a href="#default-tab-4"  data-toggle="tab">Configuraciones</a></li>
					</ul>
					<div class="tab-content">
					
<!--00000000000000000000000000000000000000000000000000000000000000000000   default-tab-1 0000000000000000000000000000000000  - -->							
<div class="tab-pane fade active in" id="default-tab-1">


<div id="calcuar_roller">	



<!--0000000000000000000000000000000000 VISTA CALCULAR ROLLERS 0000000000000000000000000000000000-->	
	<div id="vista_calcular_roller"  >		

</div>
<!--0000000000000000000000000000000000 FIN VISTA CALCULAR ROLLERS 00000000000000000000000000000000000000000000000000000000000000000-->






<!--00000000000000000000000000000000000000000000000 VISTA CONFIRMAR Presupuesto 000000000000000000000000000000000000000000000000-->	
	<div id="vista_confirmar_presu" style = "display: none;" >	
	
		<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
	

			
			<!-- begin row -->
			
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			      <div id="page-loader"  class="fade"><span class="spinner"></span></div>
			    </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			   
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                             
                            </div>
                            <h4 class="panel-title">Confirmar Presupuesto</h4>
                        </div>
                       
                        <div class="panel-body">					
						
						
	<div id="div_calcular"> 	



	<form action="modificarsql.php" method="post">




<div class="form-group">

<div id="old_cliente">


		<label for="cliente">Nombre del cliente</label> <div id="clienteT">  
		<input type="text" class="form-control" id="cliente" placeholder="Juan Perez" name="cliente" value="">
		
		</div>	
		
	

		<br>
<button type="button" onclick="boton_newCliente();" class="btn btn-default btn-sm">Ingresar Nuevo Cliente</button>		
		</div>

<div id="new_cliente" style="display:none;">

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

<div class="form-group">
		<label for="precio">Extraciones (opcional)</label>
		<input type="number" class="form-control" id="extracciones" placeholder="0 $" name="extracciones" value="">
		
	  </div>		  
	  	  
	  
	  

 
	
	</form> <br> 

 	

	  <div id="loading" ></div>

  
</div>



  
</div>
</div>
</div>
	  <a class="btn btn-default verde" type="button" onclick="altaDatosP();"  value="Agregar Cortina"/> Guardar presupuesto</a> <br> 
	</form> <br> 



</div>
<!-- VISTA CONFIRMAR Presupuesto -->




</div><!--0000000000000000000000000000000000000000- FIN DIV LEFT 00000000000000000000000000000000000000000000000000000-->






	<div  id="div_presu_temporal" class="min-width">

	<div class="loading" ></div>
 <!-- VISTA PRES TEMPORAL-->
  <div id="content" ></div>
   <div id="content_detalle" style = "display: none;" ></div>
  


    
	 <a class="btn btn-default" id="btn_reali" type="button" onclick="realizar_presu();" value="Agregar Cortina"/> Realizar Presupuesto</a> 
 <div class="btn-group ">
								<a href="javascript:;" data-toggle="dropdown" class="btn btn-default " aria-expanded="false">Productos <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li> <a style="cursor:pointer" onclick="calcular_div();">Calcular Roller</a>  </li>

									<li><a style="cursor:pointer"  onclick="calcular_cromatikas();" value="Agregar Cortina"/> Calcular Cromatikas</a> </li>
									<li><a style="cursor:pointer"  onclick="calcular_multistore();" value="Agregar Cortina"/> Calcular Multistore</a> </li>
									<li><a style="cursor:pointer"  onclick="calcular_p_orientales();" value="Agregar Cortina"/> Calcular P Orientales</a> </li>
									<li><a style="cursor:pointer"  onclick="calcular_accesorios();" value="Agregar Cortina"/> Calcular Accesorios</a> </li>
									<li><a style="cursor:pointer"  onclick="calcular_telas();" value="Agregar Cortina"/> Calcular Telas</a> </li>
									

									
								</ul>
</div>
	
 	 <a class="btn btn-default" type="button"  onclick="eliminarP();" > Eliminar Presupueso temporal</a> <br> 
	</div>
  

  
  


</div>
<!--00000000000000000000000000000000000000 END   default-tab-1 000000000000000000000000000000000000000000000000000000000000000000000- -->		






<div  class="tab-pane fade"  id="default-tab-2">
						<!-- VISTA PRESUPUESTOS-->
						




<div id="contentPRESU_DETALLE">
			
</div>		 

<div id="contentPRESU" >
			


	

		
</div>
<!-- FIN VISTA PRESUPUESTOS -->
			
</div>
						
						
<div class="tab-pane fade" id="default-tab-3">


<!-- VISTA CLIENTES -->

<div id="div_clientes" style = "display: none;" > 

		<div id="popupbox" style="">
			<form name="clientx" id="clientx" method="POST">
				<input type="hidden" name="id" id="id" value="">
				<div>
					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" value = "">
				</div>
				<div>
					<label>Apellido</label>
					<input type="text" name="apellido" id="apellido"value = "">
				</div>
				<div>
					<label>Dirección</label>
					<input type="text" name="direccion" id="direccion" value = "">
				</div>
				<div>
					<label>Telefono</label>
					<input type="text" name="telefono" id="telefono" value = "">
				</div>
				<div class="buttonsBar">
					<input id="cancel" type="button" value ="Cancelar" onclick="$('#popupbox').hide();$('#clientx').reset();$('#block').hide();presu_div1();"/>
					<input id="agregar" type="button" name="submit" value ="Guardar" onclick="guardar();"/>
					<input id="modificar" type="button" name="submit" value ="Modificar" onclick="modificarr();"/>
				</div>
			</form>
		</div>		 
			<div id="contentC">
			</div>


			<div id="block"></div>


		</div>
		








<!-- FIN VISTA CLIENTES -->							
</div><!--00000000000000000000000000000000000000000- END TAB 3 00000000000000000000000000000000000000000000000000000000000000000000-->	



<!--00000000000000000000000000000000000000000000000000000000000000000000-   default-tab-4 000000000000000000000000000000000000000000- -->							
<div class="tab-pane fade " id="default-tab-4">

 	 <div class="responsive" >
			 <div  class="btn-group ">
								<a href="javascript:;" data-toggle="dropdown" class="btn btn-default menu_config activa" aria-expanded="false">Configurar <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li> <button type="button"  onclick="vista_left('1');" class="btn btn-default menu_config btn1 activa">Configurar precios</button>  </li>

									<li><button type="button"  onclick="vista_left('2');" class="btn btn-default menu_config btn2">Configurar Rollers</button> </li>
									<li><button type="button"  onclick="vista_left('cromatikas_tela');" class="btn btn-default menu_config btn3">Configurar Cromatikas</button></li>
									<li> <button type="button"  onclick="vista_left('multistore_tela');" class="btn btn-default menu_config btn4">Configurar Multistore</button> </li>
                                    <li>
									<button type="button"  onclick="vista_left('3');" class="btn btn-default menu_config btn5">Configurar Accesorios</button></li>
									<li> <button type="button"  onclick="vista_left('p_orientales_tela');" class="btn btn-default menu_config btn6">Configurar P orientales</button> </li>
									 <li>
									<button type="button"  onclick="vista_left('genericas_tela');" class="btn btn-default menu_config btn7">Configurar Telas </button></li>
									
									

									
								</ul>
							</div>

		</div>



<div id="config_left">	
<!-- 00  VISTA CALCULAR ROLLERS 0000000000000000000000000000000000-->


<div id="vista_left"  >		

</div>







</div>
<!-- FIN VISTA LEFT 0000000000000000000000000000000000-->




 <!-- 0000 VISTA RHIGT 0000000000000000000000000000000000-->
	<div  id="vista_menu_config" class="vista-normal">
	


</div> 
  


</div>

<!--0000000000000000000000000000000000 END   default-tab-400000000000000000000000000000000000000000000000000000000000000000000- -->		



				


</div><!-- end TAB CONTEN -->
				
			
 
</div><!-- begin row -->
			
		
		










<!-- VISTA Admin precios -->

<div id="div_precios" style = "display: none;" > 			 
			<div id="contentC">
			</div>
<h2> Administrar Precios </h2>

<div class="form-group">
		<label for="largo">Aumentar precios (porcentaje %)</label>
		<input type="number" min="0" max="99" class="form-control" id="aumentar" placeholder="expresar en centimetros" name="aumentar" value="">
	  </div>
	  
<div class="form-group">
		<label for="largo">Bajar precios (porcentaje %)</label>
		<input type="number" min="0" max="99" class="form-control" id="bajar" placeholder="expresar en centimetros" name="bajar" value="">
	  </div>

	  
<button type="submit"  onclick="admin_precios();" class="btn btn-default">Modificar precio</button>
			


		</div>
		

<!-- FIN VISTA Admin precios -->







<!-- VISTA Admin colores -->

<div id="div_color" style = "display: none;" > 	
<h2> Administrar colores de las telas </h2>
			<div id="contentCOLOR" style = "display: none;">
			
			
			</div>

			


		</div>
		

<!-- FIN VISTA Admin Colores -->










<div  id="loading3" ></div> <br>

</div> <!-- END CONTAINER -->
</div>  <!-- END MAIN -->
<div id="push"></div>
</div> 



	



</body>
</html>