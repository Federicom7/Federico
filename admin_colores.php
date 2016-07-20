


<script src="js/color_admin.js"></script>
<script src="js/funciones-ajax_color.js" type="text/javascript"></script>  

<div class="form-group">
<h3>Configurar colores </h3>

	<form action="controller/alta_color_nuevo.php" method="post">
	  <input type="hidden" name="id" value="">
	  
	  <div class="form-group">
		<label for="nombre">Lista de Colores</label>



	<select id='coloresF'  onchange="color_select_delete(this.value);">

    </select>

  <a class="btn btn-default" type="button" onclick="deleteColor();" ">Eliminar</a> 
	


    <script type="text/javascript">mostrarColores_asig();</script> <br><br>
	
Nuevo color (nombre) <input type="text" name="new_color" value=""><br><br>
Codigo <input type="text" name="codigo_color" value=""><br> <br> 

<input type="submit" value="Egregar color">	<br> <br> 
</form> <br> 

  </div> </div>

<div class="form-group">
<h3>Configurar Telas y colores </h3>


	<form action="controller/alta_colores.php" method="post">
	  <input type="hidden" name="id" value="">	
	  <div class="form-group">
		<label for="nombre">Tipo de tela</label>



	<select id='telas' name="telas" onchange="color_select(this.value);">

    </select>
	


    <script type="text/javascript">mostrarTelas();</script>

  </div>

   <div class="form-group">
   
Colores ya asignados  <select  id="id_color_select"> </select>
<a class="btn btn-default" type="button" onclick="deleteDatosColor();"  value="Eliminar Color">Eliminar colores asignados</a>  <br> <br>




<div id="loading" ></div>
 
  <div  >
 <label for="nombre">Selecciona los colores a asignar  </label> <br>
  <select id="content_color" name="content_color[]" multiple="multiple"> 
  
  
  </select>
  
  </div> <br>  <br> 
	  
<input type="submit" value="Asignar color a la tela">	  

	
	</form>
	</div></div> <br> 
	
	
<!--	<a class="btn btn-default" type="button" onclick="altaDatosColor();" href="admin_colores.php" value="Agregar Cortina"/> Agregar Color</a>  <br> <br>

 -->	

	
  

