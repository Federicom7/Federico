<?php
   
           
   if(isset($_POST['mecanismo']))
   {
require 'autoload.php';

$mecanismo = $_POST['mecanismo'];

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getRollers_mecani_precio($mecanismo);
      
	  


	if ($productoOK){ ?>

	

	
	<?php	for ($i=0;$i<count($productoOK);$i++){ ?>


			 <option value="<?php echo $productoOK[$i]['price_mecani']; ?>"><?php echo $productoOK[$i]['price_mecani']; ?></option>
			
			

			
	<?php	} 
	
	exit;



		
	}
	else{
		echo 'Aún no hay datos ingresados';
	}
	  
	  
	  
	}  
	  

?>