<?php

require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->deletePresu($_GET['id']);



	if ($productoOK) {
	echo '  <script type="text/javascript">
				window.location="presupuestos.php"
			</script>';
}
	



?>

