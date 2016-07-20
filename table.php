
	<!-- begin #page-loader -->
	
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
	

			
			<!-- begin row -->
			
			    <!-- begin col-2 -->
			    <div class="col-md-2">
			      <div id="page-loader"  class="fade"><span class="spinner"></span></div>
			    </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			   
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Lista de Presupuestos</h4>
                        </div>
                       
                        <div class="panel-body">
                            
							
							
							
							
							
							
							
<?php

	
	require 'autoload.php';

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto = new Producto($base);

	$productoOK = $producto->getPresupuestos();
	
	if ($productoOK){

		echo '  <table id="example" class="table table-striped table-bordered nowrap" width="100%">
		<thead>
				<tr >
				
					<th>Cliente</th>

					
					<th>Unidades</th>
					<th>SubTotal</th>
					<th>Viaticos</th>
					<th>Total</th>
					
					<th>fecha</th>
					<th>Operaciones</th>
				
				    </tr>
    </thead>
	<tbody>'; 
		for ($i=0;$i<count($productoOK);$i++){
			$total_FINAL=$productoOK[$i]['total'] + $productoOK[$i]['viaticos'] + $productoOK[$i]['extracciones'];

	$base = new BasedeDatosmysqli(SERVIDOR,USUARIO,PASSWORD,BASE);
	$producto3 = new Producto($base);

	$cliente = $producto3->Mostrar2($productoOK[$i]['id_cliente']);
			
			echo '<tr class="odd gradeX">
            
			
					<td> <a href="javascript:;" onclick="presu_detalle('.$productoOK[$i]['id_presu'].')">'.$productoOK[$i]['cliente'].'</a> </td>
					
					
					 <td>'.$productoOK[$i]['unidades'].'</td>
					 <td>'.$productoOK[$i]['total'].'</td>
					 <td>'.$productoOK[$i]['viaticos'].'</td>
					<td>'.$total_FINAL.'</td>
					
					 <td>'.$productoOK[$i]['fecha'].'</td> 
					 <td>
					 
					 <div class="btn-group m-r-5 m-b-5">
								<a href="" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">Acciones <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="javascript:;" onclick="presu_detalle('.$productoOK[$i]['id_presu'].')">Ver presupuesto</a></li>

									<li><a  href="controller/edit_presu.php?id='.$productoOK[$i]['id_presu'].'" onclick="if(!confirm(\'Se prepapara para editar presupuesto seleccionado\'))return false">Editar</a></li>

									<li><a href="javascript:;"  onclick="editar2('.$cliente[0]['id'].',\''.$cliente[0]['nombre'].'\',\''.$cliente[0]['apellido'].'\',\''.$cliente[0]['direccion'].'\',\''.$cliente[0]['telefono'].'\');"> Cliente</a>   </li>
									
									<li class="divider"></li>
									<li><a href="javascript:;" onclick="if(!confirm(\'Se borrará el presupuesto seleccionado\'))return false; else eliminarP2('.$productoOK[$i]['id_presu'].')">Eliminar</a></li>
								</ul>
							</div>
					 
					 
					

			</tr>';
			
		}
		echo '    </tbody>
</table> ';
	}
	else{
		echo 'Aún no hay datos ingresados';
	}


?>
		
							
							
                 
                        </div>
                    </div>
                    <!-- end panel -->
            
		</div>
		<!-- end #content -->
		
   
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	

	<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 5, "desc" ]]
    } );
} );
		$(document).ready(function() {
			App.init();
			TableManageResponsive.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>