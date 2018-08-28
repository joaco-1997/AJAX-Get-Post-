<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar con Ajax</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>

<script>
	function enviar(){
	var codigo=document.getElementById('codigo').value;
	var nombre=document.getElementById('nombre').value;
	var apellido=document.getElementById('apellido').value;
	var telefono=document.getElementById('telefono').value;
	var email=document.getElementById('email').value;
	var genero=document.getElementById('genero').value;
	var edad=document.getElementById('edad').value;
	var observaciones=document.getElementById('observaciones').value;

	var dataen = 'codigo='+codigo+ '&nombre='+nombre+ '&apellido='+apellido+ '&telefono='+telefono+ '&email='+email+ '&genero='+genero+ '&edad='+edad+ '&observaciones='+observaciones;

	$.ajax({
		type:'post',
		url:'send_post.php',
		data:dataen,
		success:function(resp){
			$("#respa").html(resp);
		}
	});
	return false;
}
</script>
<form method="post" onsubmit="return enviar();">
			<h1>ENVIO DE DATOS, METODO POST CON AJAX</h1>
			<input type="text" name="codigo" id="codigo">
			<input type="text" name="nombre" id="nombre">
			<input type="text" name="apellido" id="apellido">
			<input type="text" name="telefono" id="telefono">
			<input type="text" name="email" id="email">
			<input type="text" name="genero" id="genero">
			<input type="text" name="edad" id="edad">
			<input type="text" name="observaciones" id="observaciones">
			<input type="submit" value="Enviar">
			
		</form>
		<p id="respa"></p>
</body>
</html>