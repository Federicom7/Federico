<?php
   
           
   if(isset($_POST['get_option']))
   {
require 'autoload.php';

$state = $_POST['get_option'];

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
$producto = new Producto($base);

$productoOK = $producto->getUser($state);
      
	  


	if ($productoOK){ ?>

	

	
	


			 <input id="tele_guardado" value="<?php echo $productoOK[0]['telefono']; ?>">


			
			

			
	<?php	


		
	}
	else{
		echo '<input id="tele_nuevo" value="">';
	}
	  
	  
	  
	}  
	  

?>