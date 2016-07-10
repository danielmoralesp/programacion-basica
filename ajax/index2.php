<html>
	<head>
		<title>Nuestra Primera Aplicacion Ajax</title>
	
		<style>
			.displaybox{
				width: 150px;
				background-color: #cc9900;
				border: 2px solid #000000;
				padding: 10px;
				font: 24px normal verdana, helvetica, arial, sans-serif;
			}

			.Estilo1{
				color: #FFFF00;
				font-family: "Berlin Sans FB Demi";
			}

			body{
				background-image: url('BS06035.jpg');
			}

			.Estilo2{
				font-family: "Berlin Sans FB Demi"
			}
		</style>
		<script language="JavaScript" type="text/javascript">
			function getXMLHTTPRequest(){
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

			var http = getXMLHTTPRequest();

				function horaServidor(){
					//declara una variable que contiene alguna informacion para pasar al servidor
					var myurl = 'dimehoraXML.php';

					//creamos un valor aleatorio con el fin de que no se guarde en cache
					myRand = parseInt(Math.random()*99999999);

					//cosntruye la URL del script del servidor que queremos llamar
					var modurl = myurl+"?rand="+myRand;

					//pedimos a nuestro objeto XMLHTTPRequest que abra una conexion con el servidor
					http.open("GET", modurl, true);

					//Preparamos una funcion respuestaAjax() para ejecutarse cuando la respuesta haya llegado
					http.onreadystatechange = useHttpResponse;

					//y finalmente enviamos la peticion
					http.send(null);

				}

			function useHttpResponse(){
			// solo nos interesa un readyState de 4 es decir: "Completado"
			if(http.readyState == 4){
				//si la respuesta HTTP del servidor es "OK"
				if(http.status == 200){
					var timeValue = http.responseXML.getElementsByTagName("timenow")[0];
					document.getElementById('showtime').innerHTML = timeValue.childNodes[0].nodeValue;
					}
				}else{
					//crear un mensaje de error para cualquier otra respuesta HTTP del servidor
					document.getElementById('showtime').innerHTML = '<img src="anim.gif">';
				}
				
			}
				


		</script>

	</head>
	<body onload="horaServidor()">
		<center>
			<h1 class="Estilo2">Nuestra primera aplicacion en ajax</h1>
			<h2 class="Estilo1">Obtener la hora del servidor sin actualizar la pagina</h2>

			<form >
				<input type="button" class="Estilo2" onClick="horaServidor()" value="Cual es la hora del servidor?">
			</form>
			<div id="showtime" class="displaybox"></div>
		</center>
		
	</body>


</html>