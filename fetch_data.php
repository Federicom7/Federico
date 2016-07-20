<?php
   
           
   if(isset($_POST['get_option']))
   {
require 'autoload.php';

$state = $_POST['get_option'];

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getRollers_Tela2($state);
      
	  


	if ($productoOK){ ?>

	

	
	<?php	for ($i=0;$i<count($productoOK);$i++){ ?>


			 <option value="<?php echo $productoOK[$i]['price_m2']; ?>"><?php echo $productoOK[$i]['price_m2']; ?></option>
			
			

			
	<?php	} 
	
	exit;



		
	}
	else{
		echo 'Aún no hay datos ingresados';
	}
	  
	  
	  
	}  
	  

?>