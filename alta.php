<?php
require 'autoload.php';

$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productos = $producto->insertProducto_temp($_POST['ancho'],
		                                        $_POST['largo'],
		                                        $_POST['tela'],
		                                        $_POST['precio_tela'],
		                                        $_POST['mecanismo'],
		                                        $_POST['precio_mecanismo'],
		                                        $_POST['motor'],
		                                        $_POST['emisor'],
		                                        $_POST['suplementos'],
		                                        $_POST['suple_unidades'],
		                                        $_POST['instalacion'],
		                                        $_POST['cantidad'],
		                                        $_POST['total']


		                                        );
	

?>


