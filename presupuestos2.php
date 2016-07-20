<h2>Presupuestos </h2>


<?php

	
	require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getPresupuestos();
	
	if ($productoOK){

		echo '  <div id="div1"> <table class="table table-bordered">
		<thead>
				<tr >
				<th>Presup.</th>
					<th>Cliente</th>

					
					<th>Unidades</th>
					<th>SubTotal</th>
					<th>Viaticos</th>
					<th>Total</th>
					
					<th>fecha</th>
					<th colspan="3">Operaciones</th>
				    </tr>
    </thead>
	<tbody>'; 
		for ($i=0;$i<count($productoOK);$i++){
			$total_FINAL=$productoOK[$i]['total'] + $productoOK[$i]['viaticos'];

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto3 = new Producto($base);

	$cliente = $producto3->Mostrar2($productoOK[$i]['id_cliente']);
			
			echo '<tr >
			<td>'.$productoOK[$i]['id_presu'].'</td>
					<td><a class="edit" style="cursor:pointer" onclick="editar2('.$cliente[0]['id'].',\''.$cliente[0]['nombre'].'\',\''.$cliente[0]['apellido'].'\',\''.$cliente[0]['direccion'].'\',\''.$cliente[0]['telefono'].'\');">  '.$productoOK[$i]['cliente'].'</a> </td>
					
					
					 <td>'.$productoOK[$i]['unidades'].'</td>
					 <td>'.$productoOK[$i]['total'].'</td>
					 <td>'.$productoOK[$i]['viaticos'].'</td>
					<td>'.$total_FINAL.'</td>
					
					 <td>'.$productoOK[$i]['fecha'].'</td> 
					<td><a onclick="presu_detalle('.$productoOK[$i]['id_presu'].')"><button type="button" class="btn btn-infoe">Ver</button></a></td>
					<td><a  onclick="if(!confirm(\'Se borrará el presupuesto seleccionado\'))return false; else eliminarP2('.$productoOK[$i]['id_presu'].')"><button type="button" class="btn btn-infoe">Eliminar</button></a></td>
					<td><a href="controller/edit_presu.php?id='.$productoOK[$i]['id_presu'].'" onclick="if(!confirm(\'Se prepapara para editar presupuesto seleccionado\'))return false"><button type="button" class="btn btn-infoe">Editar</button></a></td>
				</tr>';
			
		}
		echo '    </tbody>
</table>  </div>';
	}
	else{
		echo 'Aún no hay datos ingresados';
	}


?>
