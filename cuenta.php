<?php 


	
require 'autoload.php';

$tela=$_POST['tela'];
$id_tela=$_POST['tela'];
$tipo="Roller";
$tipoTela="rollers_telas";

$largo=$_POST['largo']  / 100;

$ancho=$_POST['ancho'] / 100;

$mando=$_POST['mando'];
$color=$_POST['color'];
$lcc=$_POST['lcc'];
$observa=$_POST['observa'];
///////////////////////////////////////////////////////////////// instalacion
$ins=$_POST['instal'];
$instalacion_tipo=$_POST['instal'];

if ($ins == "1") { $instalacion=$_POST['instal_manual'];  } else { 
if(isset($_POST['precio_instal']))  {@$instalacion=$_POST['precio_instal'];} 
if ($ins == "0") { $instalacion= 0;  }
if ($ins == "estandar") {    

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getRollers_precio_instal($_POST['instal']);
      
@$instalacion=$productoOK[0]['price_coloca'];;

}
}

/////////////////////////////////////////// FIN Instalacion


///////////////////////////////////////////////////////////////SUPLEMENTOS///////////////////////////
@$precio_suple=$_POST['precio_suple'];
@$suple_para=$_POST['suple_para'];

if ($precio_suple != 0) {  
$suple_unidades=$_POST['suple_unidades'];
 $total_suplementos = ($precio_suple * $suple_unidades)/2;
} else { $total_suplementos = 0;  }

//////////////////////////////////////////

///////////////////////////////////////////////////////////////SOPORTES///////////////////////////
@$soportes_para=$_POST['soportes_para'];
@$precio_soportes=$_POST['precio_soporte'];

@$soportes_tipo=$_POST['soportes_tipo'];
$soportes_unidades=$_POST['soportes_unidades'];


if ($soportes_para != 0) {  

 $total_soportes = ($precio_soportes * $soportes_unidades)/2;
} else { $total_soportes = 0; $soportes_tipo = ""; $soportes_unidades = 0;  }

//////////////////////////////////////////

/////////////////////////////////////////////////MECANISMO/////////////////////////////////////////

$mecanismo=$_POST['mecanismo'];

$cantidad=$_POST['cantidad'];

if(isset($_POST['motor']))
   {
@$motor=$_POST['motor'];

@$emisor=$_POST['emisor'];

} else {
@$motor=0;

@$emisor=0;

}







if ($tela != "0") {  

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$Tela = $producto->getArticulosPost($tela,$tipoTela);
	
	if ($Tela){ 

	

	$precio_tela_m2 = $Tela[0]['price_m2'] ;
	$tela = $Tela[0]['nombre_tela'] ;


	
    
}
	else{
		echo 'Aún no hay datos ingresados';
	}

 }  else{
		
		$precio_tela_m2 = 0;
	}




/*

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getRollers_mecani();
	
	if ($productoOK){ 

		
if ($ancho <= 2 ) {

	$precio_mecanismo= $productoOK[0]['price_mecani'] ;
	@$mecanismo = $productoOK[0]['nombre'] ;
}
else {

	$precio_mecanismo= $productoOK[1]['price_mecani'] ;

	@$mecanismo = $productoOK[1]['nombre'] ;
}

	
    
}
	else{
		echo 'Aún no hay datos ingresados';
	}
 */  


$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getRollers_mecani_precio($mecanismo);
      
	  


	if ($productoOK){ 

		$precio_mecanismo= $productoOK[0]['price_mecani'] ;

		}
	else{
		echo 'Aún no hay datos ingresados';
	}





$precio_ok = $ancho  * $largo  * $precio_tela_m2 + ($ancho  * $precio_mecanismo ) ;

$precio_mecanismo2= $ancho  * $precio_mecanismo  ;
$precio_ok2 = $ancho  * $largo  * $precio_tela_m2 ;
//$m2 = $ancho * $largo ;

// Regla de tres simples   

//$precio_ok = ($m2 * $precio_tela_m2  )/ 10000 ;




$precio_TOTAL =( $precio_ok + $instalacion + $motor + $emisor + $total_suplementos + $total_soportes ) * $cantidad;




$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productos = $producto->insertProducto_temp($tipo,
	                                            $ancho,
		                                        $largo,
		                                        $tela,
												$id_tela,
		                                        $precio_tela_m2,
		                                        $mecanismo,
		                                        $precio_mecanismo,
		                                        $motor,
		                                        $emisor,
												//suple
						                        $suple_para,
		                                        $total_suplementos,
		                                        $suple_unidades,
												//soporte
												$soportes_para,
												$soportes_tipo,
                                                $soportes_unidades,
												$total_soportes,
												//
												$instalacion_tipo,
		                                        $instalacion,
		                                        $mando,
                                                $color,
                                                $lcc,
                                                $observa,
		                                        $cantidad,
		                                        $precio_TOTAL


		                                        );



?>