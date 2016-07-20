<?php

require 'autoload.php';




// pregunta la ultima tela seleccionada
	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOKKK = $producto->getRollers_Prod_temp();
	


$i=0;

if ($productoOKKK){ 
	


		for ($i=0;$i<count($productoOKKK);$i++){ 


			$i;
			
		}  
$i=$i-1;

?>
	

	<option value="<?php echo $productoOKKK[$i]['nombre_tela']; ?>"><?php echo $productoOKKK[$i]['nombre_tela']; ?></option>
	<?php	}  

		
		
else {
	$i=0; ?>
	
	
	
	<?php
	
}		







	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getRollers_tela();
	
	if ($productoOK){ ?>
	
	
	

	

	
	<?php	for ($i=0;$i<count($productoOK);$i++){ ?>


			 <option value="<?php echo $productoOK[$i]['nombre_tela']; ?>"><?php echo $productoOK[$i]['nombre_tela']; ?></option>
			
			

			
	<?php	} ?> 




	<?php
		
	}
	else{
		echo 'Aún no hay datos ingresados';
	}




?>

