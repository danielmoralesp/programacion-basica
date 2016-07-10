<script languaje="javascript">
	function getXMLHTTPRequest(){
		var req = false;
	try{
		req = new XMLHTTPRequest();
	}catch(err1){
		try {
			req = new ActiveXObjetc("Msxml2.XMLHTTP");
		}catch(err2){
			try{
				req = new ActiveXObjetc("Microsoft.XMLHTTP");
			}catch(err3){
				req = false;
			}
		}
	}
	return req;
	}

	var miPeticion = getXMLHTTPRequest();

	function llamarAjax(){
		//declara una variable que contiene alguna informacion para pasar al servidor
		var apellido = document.form1.minombre.value;

		//creamos un valor aleatorio con el fin de que no se guarde en cache
		var miAleatorio = parseInt(Math.random()*99999999);

		//cosntruye la URL del script del servidor que queremos llamar
		var url = "miscriptdeservidor.php?surname=" + apellido;

		//pedimos a nuestro objeto XMLHTTPRequest que abra una conexion con el servidor
		miPeticion.open("GET", url+"&rand="+miAleatorio, true);

		//Preparamos una funcion respuestaAjax() para ejecutarse cuando la respuesta haya llegado
		miPeticion.onreadystatechange = respuestaAjax;

		//y finalmente enviamos la peticion
		miPeticion.send(null);

	}

	function respuestaAjax(){
		// solo nos interesa un readyState de 4 es decir: "Completado"
		if(miPeticion.readyState == 4){
			//si la respuesta HTTP del servidor es "OK"
			if(miPeticion.status == 200){
				alert("El server dijo: " + miPeticion.responseText);
				}
			}else{
				//crear un mensaje de error para cualquier otra respuesta HTTP del servidor
				alert("Ha ocurrido un error: " + miPeticion.statusText);
			}
			
		}
		



</script>

<html>
<body>
	


<form name="form1">
	Nombre: <input type="text" name="minombre" onblur="llamarAjax()"><br>
	Tel: <input type="text" name="teln"><br>
	<input type="submit">

</form>

</body>

</html>

