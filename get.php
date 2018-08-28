<!DOCTYPE html>
<html>
	<title></title>
</head>
<body>

</body>
</html>
<html>
<head>
	<script>
		var xmlhttp;
	{
		function ajax(datos, ruta)  
		var	xmlhttp;
		if (window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}

		
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				 {
					document.getElementById("cuerpo").innerHTML=xmlhttp.responseText;	
				}
			}

			xmlhttp.open("GET",ruta+datos,true)
			xmlhttp.send();
	}

	//====================================================
	function recibe(){
		

	var codigo=document.getElementById('codigo').value;
	var nombre=document.getElementById('nombre').value;
	var apellido=document.getElementById('apellido').value;
	var telefono=document.getElementById('telefono').value;
	var email=document.getElementById('email').value;
	var genero=document.getElementById('genero').value;
	var edad=document.getElementById('edad').value;
	var observaciones=document.getElementById('observaciones').value;
	var dataen = 'codigo='+codigo+ '&nombre='+nombre+ '&apellido='+apellido+ '&telefono='+telefono+ '&email='+email+ '&genero='+genero+ '&edad='+edad+ '&observaciones='+observaciones;

	ajax("valor="+dato, "recibe.php?");
	}


	</script>
</head>


<body>

<body style="font-family:verdana, Geneva, sans-serif; font-size:24px; text-align:center;>
<form method="get">
<fieldset style="width:60%;">

<form method="Get" onsubmit="return recibe();">
			<h1>ENVIO DE DATOS, METODO GET CON AJAX</h1>
			<input type="text" name="codigo" id="codigo">
			<input type="text" name="nombre" id="nombre">
			<input type="text" name="apellido" id="apellido">
			<input type="text" name="telefono" id="telefono">
			<input type="text" name="email" id="email">
			<input type="text" name="genero" id="genero">
			<input type="text" name="edad" id="edad">
			<input type="text" name="observaciones" id="observaciones">
			<input type="button" onclick="recibe();" value="Enviar Datos">
			<div id="cuerpo"></div>
			
		</form>
		<p id="respa"></p>


<div style="color:#040;">
</div>
</fieldset>
</form>
</body>

</html>