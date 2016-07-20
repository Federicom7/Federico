<?php
 session_start();
require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->deletePresu_temp();

unset($_SESSION['rollers']);
unset($_SESSION['cliente']);





?>

