<?php
   
           
   if(isset($_POST['get_option']))
   {
require 'autoload.php';

$state = $_POST['get_option'];

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getUser($state);
      
	  


	if ($productoOK){ ?>

	

	
	


			 <input id="dire_guardado" value="<?php echo $productoOK[0]['direccion']; ?>">


			
			

			
	<?php	


		
	}
	else{
		echo '<input id="dire_nuevo" value=""> ';
	}
	  
	  
	  
	}  
	  

?>