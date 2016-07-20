<?php

require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getRollers_mecani();
	
	if ($productoOK){  ?>

	 <!--
	<option value="1">Seleccionar...</option> -->

	
	<?php	for ($i=0;$i<count($productoOK);$i++){ ?>


			 <option value="<?php echo $productoOK[$i]['nombre']; ?>"><?php echo $productoOK[$i]['nombre']; ?> <?php echo $productoOK[$i]['descripcion']; ?> (  Ancho maximo <?php echo $productoOK[$i]['ancho_max']; ?> cm)</option>
			
			

			
	<?php	} ?> 
	
	<option value="0">Ninguno</option>




	<?php
		
	}
	else{
		echo 'Aún no hay datos ingresados';
	}




?>

