// JavaScript Document



function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function mostrarDatos(){
	//donde se mostrará el resultado de los productos 
	divResultado = document.getElementById('resultado');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajax.open("POST", "consulta.php",true);
	ajax.onreadystatechange=handler_usuario;
	ajax.send()
		
	function handler_usuario() {
		if (ajax.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divResultado.innerHTML = ajax.responseText;
		}
	}	
}



function mostrarDatos2(edi,edi2){  
Display_LoadOK() 
	//alert(edi2);
	//donde se mostrará el resultado de los productos 
	divMecanismo = document.getElementById('mecanismo');
	
	//instanciamos el objetoAjax
	ajax1=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajax1.open("POST", "consulta_mecanismo.php",true);
	ajax1.onreadystatechange=handler_usuario;
	ajax1.send()
		
	function handler_usuario() {
		if (ajax1.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divMecanismo.innerHTML = ajax1.responseText;



	var edicion=edi;


if (edicion == null) { 
			fetch_select2('110');
			fetch_instal("estandar");
			 }	
	


	

//00000000000000000000000000000000000000000   EDICION 0000000000000000000000000000000

		if (edicion == 1) { 

	//alert (tipoTela)
			
		    



$.ajax({
  method: "POST",
  url: "controller/consulta_ventana.php",
  dataType:'json',
  data: { number: edi2, edit: edi }
})
  .done(function( msg ) {

if (msg.tipo == 'Roller' ) { calcular_div();} 
if (msg.tipo == 'Cromatikas' ) { calcular_cromatikas(); } 

var id_edix = msg.edicion_id_ventana;
//tipo de tala
fedes(id_edix) ;

});




   

       /* 
               Agregar campo de :
               id de tela
               instalacion tipo ok
               suplemento para 
               soportes para

             */ 

			 
			 
                }   
            

		}
	}

	Hide_LoadOK()	
}

//

function fetch_select(val)
{
	
	if (val != '1') {

 $("#div_precio_tela").slideDown( "fast");
}
else { 

	$("#div_precio_tela").slideUp();
	
}



	
   $.ajax({
     type: 'post',
     url: 'fetch_data.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
}

////////////////////////////////////////////////////////MECANISMO////////////////////////////////////////////////////

function fetch_select2(val1)
{ 
   $.ajax({
     type: 'post',
     url: 'fetch_data2.php',
     data: {
       mecanismo:val1
     },
     success: function (response) {
     
       document.getElementById("new_select2").innerHTML=response; 

     }
   });

   if (val1 == 170) {

 //
 $("#loading2").fadeIn(100,0);
 $("#loading2").html("<img  src='bigLoader.gif' />");
 //Hide Loading Image

//

   	$.ajax({
     type: 'post',
     url: 'consulta_precio_motor.php',
     data: {
       mecanismo:val1
     },
     success: function (response) {
     	$("#motor_div").css("display", "inline");
		 $("#loading2").fadeOut('slow');
       document.getElementById("id_motor").innerHTML=response; 
     }
   });

   	$.ajax({
     type: 'post',
     url: 'consulta_precio_emisor.php',
     data: {
       mecanismo:val1
     },
     success: function (response) {
     
       document.getElementById("id_emisor").innerHTML=response; 
     }
   });


   } else {   	$("#motor_div").fadeOut('slow');  }
}


///////////////////////////////////NO SE USA PARA BORRAR///////////////////////////////////////////////////


////////////////////////////////////////////////////////////PRESU TEMPORAL Consulta//////////////////////////////////////

function mostrarDatosF(){
	//donde se mostrará el resultado de los productos 
	divResultadoF = document.getElementById('resultadoF');
	
	//instanciamos el objetoAjax
	ajaxF=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajaxF.open("POST", "consulta_presu_temp.php",true);
	ajaxF.onreadystatechange=handler_usuariof;
	ajaxF.send()
		
	function handler_usuariof() {
		if (ajax.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divResultadoF.innerHTML = ajaxF.responseText;
		}
	}	
}


/////////////////////////////////////////////////////////////////GUARDAR PRESUPUESTO/////////////////////////////////////////////////
	function boton_newCliente(){
		 
		
		$('#new_cliente').slideDown( "slow");		
		$('#old_cliente').slideUp();
		$( "#tele_guardado" ).attr('value', ''); 
		$( "#dire_guardado" ).attr('value', ''); 
		$( "#cliente" ).attr('value', ''); 
		
	}
		function boton_oldCliente(){
		 
		$('#old_cliente').slideDown( "slow");
		$('#new_cliente').slideUp();	
		
	}

function altaDatosP(){
	//obtengo los valores de los campos de input del formulario
    
	 
	viaticos = document.getElementById('viaticos').value; 
	extracciones = document.getElementById('extracciones').value; 
	id_cliente = document.getElementById('log').value; 
	
	nombre = document.getElementById('cliente_nombre').value;
	apellido = document.getElementById('cliente_apellido').value;
    


        if (id_cliente < 1 && nombre < 1 ) { 
		alert("el cliente no existe, pulsa el boton INGRESAR NUEVO CLIENTE ");
		}
		else { 
   
 if( $('#new_cliente').is(":visible") ){
	 nombre_apellido = nombre+" "+apellido;
	 telefono = document.getElementById('tele_nuevo').value; 
	direccion = document.getElementById('dire_nuevo').value;
  //  alert('new_cliente');
}else{
   // alert('Elemento oculto');
	nombre_apellido = document.getElementById('cliente').value; 
	telefono = ""; 
	direccion = "";
}
//	alert( id_cliente);

		
  $.ajax({
  method: "POST",
  url: "controller/alta_presu.php",
  data: { cliente: nombre_apellido, viaticos: viaticos, extracciones: extracciones, nombre: nombre, apellido: apellido, id_cliente: id_cliente, telefono: telefono, direccion: direccion }
})
  .done(function( altaDatosP ) {
    alert( "Presupuesto guardado! ");
	mostrarDatosF();
	document.location.href = "index.php";
 cargar_all_pre_temp();	
  });
  
  
}

	}

///////////////////////////////////////////////////////////////////FIN GUARDAR/////////////////

//////////////////////////////////////////////////////////////////INSTALACION/////////////////////////////////////////////


function fetch_instal(valI)
{

	
	if (valI != '0') {

	if (valI != '1') {	

   $.ajax({
     type: 'post',
     url: 'controller/fetch_instal.php',
     data: {
       instal:valI
     },

     success: function (response) {
     	$("#instal_div").css("display", "inline");
     	$("#instal_manual").css("display", "none");
     	$("#new_select_instal").css("display", "inline");
       document.getElementById("new_select_instal").innerHTML=response; 
       	

           
     }
   });

  } else { 

   	   $.ajax({
     type: 'post',
     url: 'controller/fetch_instal.php',
     data: {
       instal:valI
     },

     success: function (response) {
    $("#instal_div").css("display", "inline");
	$("#instal_manual").css("display", "inline");
	$("#new_select_instal").css("display", "none");
       document.getElementById("new_select_instal").innerHTML=response; 
     }
   });

	
}


}




else { 
	$("#instal_div").fadeOut();
	
	
}



}

//////////////////////////////////



////////////////////////////////////////////////////////////////////////SUPLEMENTOS/////////////////////////////////////////////////////


function fetch_suple(valS)
{

	
	if (valS != '0') {



   	   $.ajax({
		   
	
     type: 'post',
     url: 'controller/fetch_suple.php',
     data: {
       suple:valS
     },
	   beforeSend: function(){
     $("#suple_div").slideDown( "slow");
	$("#suple_unidades").css("display", "inline");
	$("#new_select_suple").css("display", "inline");
   },
     success: function (response) {
    
       document.getElementById("new_select_suple").innerHTML=response; 
	  




     }
   });

	
}




else { 

	$("#suple_div").slideUp();
	
	$( "#new_select_suple" ).attr('value', '');
	// alert($('#new_select_suple').val())
	
}



}

///////////////////////////////////////////////////////////////FIN SUPLE///////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////SOPORTES////////////////////////////////////////////////////////////


function fetch_soporte(valS)
{

	
	if (valS != '0') {

 $("#soporte_div").slideDown( "slow");

soportes();

	
}




else { 

	$("#soporte_div").slideUp();
	$( "#soporte_tipo" ).attr('value', '');
	$( "#precio_soporte" ).attr('value', '');
	
}



}




//

function soportes(data)
{				
	
   	   $.ajax({
		   
	
     type: 'post',
     url: 'controller/fetch_soporte.php',
    
	   beforeSend: function(){
    
	
   },
     success: function (response) {
    
       document.getElementById("soporte_tipo").innerHTML=response;

$( "#soporte_tipo" ).val(data);
//if (edicion == 1) {    }

     }
   });
  } 
  
//







function soporte_precio(valS)
{

	
	if (valS != '0') {



   	   $.ajax({
		   
	
     type: 'post',
     url: 'controller/fetch_soporte_precio.php',
     data: {
       soporte:valS
     },
	   beforeSend: function(){
  
   },
     success: function (response) {
    
       document.getElementById("precio_soporte").innerHTML=response; 




     }
   });

	
}


}

/////////////////////////////////////////////////////////////FIN SOPORTES///////////////////////////////////////////////////////////////////////





/////////////////////////////////////////////////////////////CLIENTES/////////////////////////////////////////////////////////////////////////////

 	$(document).ready(function(){ 
				
	})
	jQuery.fn.reset = function () {
	  $(this).each (function() { this.reset(); });
	}		
	function cargar_all(){
		// $("#vista_left").load(""); 
		$.ajax({
		  type: "POST",
		  url: "controller/mostrar.php",
		  "success":function(data){
		   $('#contentC').html(data);	
		  }
		  });
	}	
	function guardar(){
		$.ajax({
		  type: "POST",		
		  url: "controller/guardar.php",
		  data: {
		  nombre : $('#nombre').val(),
		  apellido : $('#apellido').val(),
		  direccion : $('#direccion').val(),
		  telefono : $('#telefono').val()
		  },
		  "success":function(data){
		  	$('#clientx').reset();
			$('#block').hide();
			$('#popupbox').hide();
			cargar_all();	
		  }
		});
	}	
	function modificarr(){
		$.ajax({	
		  type: "POST",
		  url: "controller/modificar.php",
		  data: {
		  nombre : $('#nombre').val(),
		  apellido : $('#apellido').val(),
		  direccion : $('#direccion').val(),
		  telefono : $('#telefono').val(),
		  id : $('#id').val()
		  },
		  "success":function(data){
			$('#clientx').reset();
			$('#block').hide();
			$('#popupbox').hide();
			cargar_all();	
		  }		  
		});
	}
	function borrar(id){
		$.ajax({
		  type: "POST",		
		  url: "controller/borrar.php",
		  data: {id : id},
		  "success":function(data){
		  cargar_all();
		  }
		  });
	}
	function editar(id,nombre,apellido,direccion,telefono){
		$('#popupbox').show();
		$('#modificar').show();
		$('#agregar').hide();
		$('#block').show();
		 $('#id').val(id);
		 $('#nombre').val(nombre);
		 
		 $('#apellido').val(apellido);
		 $('#direccion').val(direccion);
		 $('#telefono').val(telefono);
		
	}
	function agregar(){
		$('#modificar').hide();
		$('#agregar').show();		
		$('#popupbox').show();
		$('#block').show();
	}

	function clientes_div(){
		//$('#div_calcular').hide();
		cargar_all();	

		$('#div_precios').hide();
		$('#div_clientes').show();		
		$('#div_color').hide();
		
	}

	function calcular_div(){
		$('#vista_calcular_roller').slideUp();	
		 $("#vista_calcular_roller").load("vista/vista_calcular_roller.html"); 
		 $('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
        
		$('#vista_calcular_cromatikas').hide();
		// $('#btn_reali').show();		
        //$('#btn_calcu').hide();
$( "#btn_reali" ).empty();
  $( "#btn_reali" ).html("Realizar Presupuesto");
 $('#btn_reali').attr('onclick', 'realizar_presu();');

$( "#modo_edit" ).val("0"); 
		
	
	}
		function realizar_presu(){
		$('#vista_confirmar_presu').slideDown( "slow");
		$('#vista_calcular_roller').hide();
		$('#vista_calcular_cromatikas').hide();

$( "#btn_reali" ).empty();
  $( "#btn_reali" ).html("Atras");
 $('#btn_reali').attr('onclick', 'calcular_div();');
       // $('#btn_reali').hide();	
        //$('#btn_calcu').show();			
	}
			function calcular_cromatikas(){
		$('#vista_calcular_roller').slideUp();	
		$("#vista_calcular_roller").load("vista/vista_calcular_cromatikas.html"); 
		$('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
		//$('#vista_calcular_roller').slideUp();
        //$('#btn_reali').hide();	
       // $('#btn_calcu').show();	
		
  		
	}
		function calcular_multistore(){
		$('#vista_calcular_roller').slideUp();	
		$("#vista_calcular_roller").load("vista/vista_calcular_multistore.html"); 
		$('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
		//$('#vista_calcular_roller').slideUp();
        //$('#btn_reali').hide();	
       // $('#btn_calcu').show();	
		
  		
	}
			function calcular_p_orientales(){
		$('#vista_calcular_roller').slideUp();	
		$("#vista_calcular_roller").load("vista/vista_calcular_p_orientales.html"); 
		$('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
		//$('#vista_calcular_roller').slideUp();
        //$('#btn_reali').hide();	
       // $('#btn_calcu').show();	
		
  		
	}
	
				function calcular_accesorios(){
		$('#vista_calcular_roller').slideUp();	
		$("#vista_calcular_roller").load("vista/vista_calcular_accesorios.html"); 
		$('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
		//$('#vista_calcular_roller').slideUp();
        //$('#btn_reali').hide();	
       // $('#btn_calcu').show();	
		
  		
	}
					function calcular_telas(){
		$('#vista_calcular_roller').slideUp();	
		$("#vista_calcular_roller").load("vista/vista_calcular_telas.html"); 
		$('#vista_calcular_roller').slideDown( "fast");
		$('#vista_confirmar_presu').hide();
		//$('#vista_calcular_roller').slideUp();
        //$('#btn_reali').hide();	
       // $('#btn_calcu').show();	
		
  		


	}
	
    function precios_div(){
		$('#div_calcular').hide();
		$('#div_precios').show();
		$('#div_clientes').css("display", "none");
		$('#div_color').hide();
		$('#div_presu').hide();
	}
		function editar2(id,nombre,apellido,direccion,telefono){
		// alert( nombre);
		
		
		$("#default-tab-3").addClass("tab-pane fade active in");

 

		
		$("#default-tab-2").removeClass("active in");
	

		$('#popupbox').show();
		$('#modificar').show();
		$('#agregar').hide();
		$('#block').show();
		 $('#id').val(id);
		 $('#nombre').val(nombre);
		 
		 $('#apellido').val(apellido);
		 $('#direccion').val(direccion);
		 $('#telefono').val(telefono);
		 clientes_div();
		
	}
	
	
/////////////////////////////////////////////////////////////////COLORES////////////////////////////////////////////////////////////////
	
	
	function colores_div(){
		$('#div_calcular').hide();
		$('#div_precios').hide();
		$('#div_clientes').css("display", "none");
		$('#div_color').show();
		$('#div_presu').hide();
	  //Display Loading Image

  function Display_Load()
  {
      $("#loading3").fadeIn(100,0);
    $("#loading3").html("<img src='bigLoader.gif' />");
  }
  //Hide Loading Image


		 $(document).ready(function(){
    
	
  
  Display_Load();

 $("#contentCOLOR").load("admin_colores.php?page=1", Hide_Load()); 

  function Hide_Load()
  {
    $("#loading3").fadeOut('fast');
  };	
	
  
});



		
	}
	
	
//////////////////////////////////////////////////////////////////// FIN COLORES/////////////////////////////////////////////////
	



	//
	



	//

	function presu_detalle(id){
		Display_Load()
		$.ajax({
		  type: "GET",		
		  url: "controller/consulta_presu_detalle.php",
		  data: {id : id},
		  "success":function (response) { 
     	$("#contentPRESU_DETALLE").css("display", "inline");
     	$("#contentPRESU").css("display", "none");
     	Hide_Load()
       document.getElementById("contentPRESU_DETALLE").innerHTML=response; 

     }
		  });
	}

		function presu_detalle_temp(idT){
		Display_Load()
		$.ajax({
		  type: "GET",		
		  url: "controller/consulta_presu_detalle_temp.php",
		  data: {idT : idT},
		  "success":function (response) { 
     	$("#content_detalle").css("display", "inline");
     $("#content").css("display", "none");
	 $("#vista_calcular_roller").slideUp();
	 
	 $("#div_presu_temporal").addClass("vista100");
	 $("#div_presu_temporal").removeClass("min-width");
	 
		
		
	 
     	Hide_Load()
       document.getElementById("content_detalle").innerHTML=response; 

     }
		  });
	}






	function presu_temp(){
		 $("#div_presu_temporal").addClass("min-width");
		$("#div_presu_temporal").removeClass("vista100");
		$("#vista_calcular_roller").slideDown();
	  	$("#content_detalle").hide();
     $("#content").show();
   
	}


/////////////////////////////////////////////////////////////////////// ADMIN PRECIOS////////////////////////////////////////////////
	
function admin_precios(){
	//obtengo los valores de los campos de input del formulario
    
if ($( "#precios" ).val()== 'aumentar') { aumentar = $( "#valor_modificar" ).val(); bajar = 0; }	
if ($( "#precios" ).val()== 'bajar') { bajar = $( "#valor_modificar" ).val(); aumentar = 0; }
		

		
  $.ajax({
  method: "POST",
  url: "controller/modif_precio.php",
  data: { aumentar: aumentar, bajar: bajar }
})
  .done(function( admin_precios ) {
    alert( "Precio Modificado");
	vista_left(1);

	mostrarDatosF();
  });
	


	}
	
	//////// FIN PRECIOS
	function presu_div1(){
	
		$('#contentPRESU_DETALLE').hide(); 
		$('#contentPRESU').show();

		$("#default-tab-2").addClass("tab-pane fade active in");
		
		$("#default-tab-3").removeClass("active in");

           }	

           	function presu_div2(){
	
		$('#contentPRESU_DETALLE').show(); 
	

	

           }	
		   
/////////////////////////////////////////////////////////////////////////FIN ADMIN PRECIO/////////////////////////////////////////////////		   
		   
	
	
	
///////////////////////////////////////////////////////////////////////PRESUPUESTOS/////////////////////////////////////////////////////////////
	 	$(document).ready(function(){ 
		cargar_all_pre_temp();	
calcular_div();
load_vistas();
presu_div();			
	})
	jQuery.fn.reset = function () {
	  $(this).each (function() { this.reset(); });
	}		
	function cargar_all_pre_temp(){
		$.ajax({
		  type: "POST",
		  url: "controller/consulta_presu_temp.php",
		  "success":function(data){
		   $('#content').html(data);	
		  }
		  });
	}
function presu_div(){
	
		$('#contentPRESU_DETALLE').hide(); 
		// $('#contentPRESU').show();
		
	  //Display Loading Image

		Display_Load()


 $("#contentPRESU").load("table.php", Hide_Load()); 



           }
function load_vistas(){
	
	////////////////////////// vista INICIO 0000000000000000000000/////////////////////////////////	







 
  $("#vista_menu_config").load("vista/vista_menu_config.html"); 

  $("#vista_left").load("vista/vista_config_precios.html"); 



 }


////////////////////////// vista confuguraciones////000000000000000000000000000000000/////////////////////////////

 function vista_left(valm){
$( "#vista_calcular_roller" ).empty();
if (valm == '1') {  

$("#vista_left").load("vista/vista_config_precios.html"); 
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn1").addClass("activa");
		

}

if (valm == '2') {  
$( "#vista_left" ).empty();
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn2").addClass("activa");
		


$("#vista_left").load("vista/vista_config_rollers.html"); 


}

if (valm == '3') {  
$( "#vista_left" ).empty();
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn6").addClass("activa");
		

$("#vista_left").load("vista/vista_config_articulos.html"); 


}

if (valm == 'cromatikas_tela') {  
$( "#vista_left" ).empty();
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn3").addClass("activa");
		


$("#vista_left").load("vista/vista_config_cromatikas.html"); 


}
if (valm == 'multistore_tela') {  
$( "#vista_left" ).empty();

$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");

$(".btn4").addClass("activa");
		


$("#vista_left").load("vista/vista_config_multistore.html"); 


}
if (valm == 'p_orientales_tela') {  
$( "#vista_left" ).empty();
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn5").addClass("activa");
		


$("#vista_left").load("vista/vista_config_p_orientales.html"); 


}

if (valm == 'genericas_tela') {  
$( "#vista_left" ).empty();
$("#menu_config_1>button").removeClass("activa");
$(".btn-group>ul>li>button").removeClass("activa");
$(".btn7").addClass("activa");
		

$("#vista_left").load("vista/vista_config_genericas.html"); 


}





 }

////////////////////////// FIN vista confuguraciones/////////////////////////////////

	
	  //Display Loading Image
  function Display_Load()
  {
      $(".loading").fadeIn(100,0);
    $(".loading").html("<img src='bigLoader.gif' />");
  }
  //Hide Loading Image
  function Hide_Load()
  {
    $(".loading").fadeOut('fast');
  };
  

$(document).keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
	if( $('#vista_calcular_roller').is(":visible") ){
    if(keycode == '13') {
		
        calcularF();    
    }
	}
});

///////////////////////////////////////////////////////////// CALCULAR CUENTA.PHP//////////////////////////////////////////////////////////
		function calcularF(){

			$( "#botton_cal_guardar" ).empty();
  $( "#botton_cal_guardar" ).append( document.createTextNode( "Calcular" ) );

			if ($('#resultadoR').val()  == 0 || $('#resultadoR').val()  != 0 ) {
			//alert ("Seleccione una tela") } else  {  
			var tipoTela = $('#tipoTela').val();
			//alert (tipoTela)
			if (tipoTela == 'rollers_telas' ) { 


				
			
			Display_Load()
		//	alert($('#id_motor').val())
		$.ajax({	
		  type: "POST",
		  url: "cuenta.php",
		  data: {
		  tela : $('#resultadoR').val(),
		  ancho : $('#ancho').val(),
		  largo : $('#largo').val(),
		  mecanismo : $('#mecanismo').val(),
		  motor : $('#id_motor').val(),
		  emisor : $('#id_emisor').val(),
		  //instalacion
		  instal : $('#instal').val(),
		  instal_manual : $('#instal_manual').val(),
		  precio_instal : $('#new_select_instal').val(),

          suple_para : $('#suple').val(),
		  precio_suple : $('#new_select_suple').val(),
		  suple_unidades : $('#suple_unidades').val(),

		  //soportes		  
		  soportes_para : $('#soporte').val(),
		  soportes_tipo : $('#soporte_tipo').val(),
		  precio_soporte : $('#precio_soporte').val(),
		  soportes_unidades : $('#soporte_unidades').val(),
		  //
		   mando : $('#mando').val(),
		   color : $('#color').val(),
		   lcc : $('#lcc').val(),
		   observa : $('#observa').val(),
		  
		  cantidad : $('#cantidad').val()
		  },
		  "success":function(data){
		    //alert ($('#color').val())
			
			cargar_all_pre_temp();	
			Hide_Load()
		  }		  
		});

		

		if ($( "#modo_edit" ).val()==1 ) { calcular_div();} 
        
			
		} else  //(tipoTela == 'cromatikas_tela' )
			{
						
			Display_Load()
			//alert($('#precioSoportes').val())
		$.ajax({	
		  type: "POST",
		  url: "cuenta_cromatikas.php",
		  data: {
			  tipo : $('#tipo').val(),
		  tipoTela : $('#tipoTela').val(),
		  tipoMecanismo : $('#tipoMecanismo').val(),
		  id : $('#id').val(),
		  tela : $('#resultadoC').val(),
		  ancho : $('#ancho').val(),
		  largo : $('#largo').val(),
		  mecanismo : $('#mecanismo').val(),
		  motor : $('#id_motor').val(),
		  emisor : $('#id_emisor').val(),
		  //instalacion
		  instal : $('#instal').val(),
		  instal_manual : $('#instal_manual').val(),
		  precio_instal : $('#new_select_instal').val(),
		  suple_para : $('#suple').val(),
		  precio_suple : $('#new_select_suple').val(),
		  suple_unidades : $('#suple_unidades').val(),
		  //soportes		  
		  //soportes_para : $('#soportes').val(),
		  soportes_para : $('#soportes').val(),
		  soportes_tipo : $('#soporte_tipo').val(),
		  precio_soporte : $('#precioSoportes').val(),
		  soportes_unidades : $('#soporte_unidades').val(),
		  //
		   mando : $('#mando').val(),
		   color : $('#color').val(),
		   lcc : $('#lcc').val(),
		   observa : $('#observa').val(),
		  
		  cantidad : $('#cantidad').val()
		  },
		  "success":function(data){
		 // alert ($('#soportes').val());
			if ($( "#modo_edit" ).val()==1 ) { calcular_cromatikas();} 
			cargar_all_pre_temp();	
			Hide_Load()



		  }		  
		});
			
			
			
			
		}
		}
	}


//////////////////////////////////////////////////////////// MasOpciones/////////////////////////////////////////////////////////


	function MasOpciones1(){ 



if( $('#MasOpciones1').is(":visible") ){
     
$("#MasOpcione1sbtn span").text("Mas opciones");		


$('#MasOpciones1').slideUp();
 } else { $("#MasOpcione1sbtn span").text("Menos");	
	$('#MasOpciones1').slideDown( "slow");	
	}
}

//////////////////////////////////////////////////////////// Eliminar presu temp/////////////////////////////////////////////////////////

	function eliminarP(){

		Display_Load()
		$.ajax({
		  type: "POST",		
		  url: "eliminar_presu_temp.php",
		  data: {},
		  "success":function(){
		  cargar_all_pre_temp();
          Hide_Load()		  
		  }
		  });
	}
	 // eliminar roller individual presu temporal
		function eliminarPT(id){
		Display_Load()
		$.ajax({
		  type: "GET",		
		  url: "controller/eliminar_ventana_temp.php",
		  data: {id : id},
		  "success":function(data){
		  cargar_all_pre_temp();
		  Hide_Load()
		  }
		  });
	}
/////////////////////////////////////////////////////////////////////fin eliminar presutemp////////////////////////////////////////////



////////////////////////////////////////////////////////////////// Eliminar presu ///////////////////////////////////////////////////////////

	function eliminarP2(id){
		Display_Load()
		$.ajax({
		  type: "GET",		
		  url: "eliminar_presu.php",
		  data: {id : id},
		  "success":function(data){
		  presu_div();
		  presu_div1();
		  
		  
		  Hide_Load()
		  }
		  });
	}

	

////////////////////////////////////////////////////////////////////fin eliminar presutemp////////////////////////////////////////////////////


// 



//////////////////////////////////////////////////////////////////// MODO EDICION ////////////////////////////////////////////////////



function fedes(pepe)  {

Display_LoadOK()

$.ajax({
  method: "POST",
  url: "controller/consulta_ventana.php",
  dataType:'json',
  data: { number: pepe}
})
  .done(function( msg ) { 

if (msg.tipo == 'Roller' ) {    
 

//alert (pepe);
mostrarRollesTT(msg.id_tela);
mostrarMECA(msg.mecanismo);



function mostrarRollesTT(caca){ $('.edit_tela').hide(); Display_LoadOK()
	//donde se mostrará el resultado de los productos 
	divResultado = document.getElementById('resultadoR');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajax.open("POST", "controller/get_tela.php",true);
	ajax.onreadystatechange=handler_usuario;
	ajax.send()
		
	function handler_usuario() {
		if (ajax.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divResultado.innerHTML = ajax.responseText;
			
	$( "#resultadoR" ).val(caca);
$(".js-example-placeholder-single").select2({
  placeholder: "Selecciona una tela",
  allowClear: true
});
telas_select(caca);

Hide_LoadOK()

		}
	}	
}


function mostrarMECA(meca){    Display_LoadOK()
	//alert(edi2);
	//donde se mostrará el resultado de los productos 
	divMecanismo = document.getElementById('mecanismo');
	
	//instanciamos el objetoAjax
	ajax1=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajax1.open("POST", "consulta_mecanismo.php",true);
	ajax1.onreadystatechange=handler_usuario;
	ajax1.send()
		
	function handler_usuario() {
		if (ajax1.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divMecanismo.innerHTML = ajax1.responseText;



$( "#mecanismo" ).val(meca);
fetch_select2(meca);


$( "#ancho" ).val((msg.ancho*100).toFixed());
$( "#largo" ).val((msg.alto*100).toFixed()); 

$( "#mando" ).val(msg.mando); 
$( "#color" ).val(msg.color);
$( "#lcc" ).val(msg.lcc);
$( "#observa" ).val(msg.observa);



$( "#modo_edit" ).val("1"); 	  
  
$( "#botton_cal_guardar" ).empty();
  $( "#botton_cal_guardar" ).append( document.createTextNode( "Guardar" ) )
Hide_LoadOK()

} } }


}


//CROMATIKAS
if (msg.tipo == 'Cromatikas' ) { 

mostrarCortinas(msg.id_tela);
mostrarMECA(msg.mecanismo); 


//
function mostrarCortinas(cortin){ $('.edit_tela').hide();
	//donde se mostrará el resultado de los productos 
	divResultadoT = document.getElementById('resultadoC');
	
	
	
	$.ajax({
  type: 'post',
  url: "controller/post_cromatikas.php",
  
   data: {
       tipoTela : $('#tipoTela').val()
     },
  
  cache: false
})
  .done(function(data) {
    
 divResultadoT.innerHTML = data;

	$( "#resultadoC" ).val(cortin);
$(".js-example-placeholder-single").select2({
  placeholder: "Selecciona una tela",
  allowClear: true
});
cortinas_select(cortin);


$( "#ancho" ).val((msg.ancho*100).toFixed());
$( "#largo" ).val((msg.alto*100).toFixed()); 

$( "#mando" ).val(msg.mando); 
$( "#color" ).val(msg.color);
$( "#lcc" ).val(msg.lcc);
$( "#observa" ).val(msg.observa);


$( "#modo_edit" ).val("1"); 	  
  
$( "#botton_cal_guardar" ).empty();
  $( "#botton_cal_guardar" ).append( document.createTextNode( "Guardar" ) )
	
  });	}

//




}
//











//
	  




$( "#suple" ).val(msg.suple_para);
fetch_suple(msg.suple_para);
$( "#suple_unidades" ).val(msg.suple_unidades); 



$( "#soporte" ).val(msg.soporte_para);
fetch_soporte(msg.soporte_para);
$( "#soporte_tipo" ).val(msg.soporte_tipo);
soportes(msg.soporte_tipo);

soporte_precio(msg.soporte_tipo);

 $( "#soporte_unidades" ).val(msg.soporte_unidades);


$( "#instal" ).val(msg.instalacion_tipo);
fetch_instal(msg.instalacion_tipo);

$( "#cantidad" ).val(msg.unidades); 

;

  
	// alert( $( "#modo_edit" ).val() );
	


});


Hide_LoadOK()

  }  



  //////////////////////////////////////////////////////////////////// FIN EDICION ////////////////////////////////////////////////////
