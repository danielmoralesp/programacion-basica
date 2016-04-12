<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Enviar email con PHP Mailer</h1>
		<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>">
			<table>
				<tr>
					<td>Nombre del Destinatario:</td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td>Email del Destinatario:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Asunto</td>
					<td><input type="text" name="asunto"></td>
				</tr>
				<tr>
					<td>Adjuntar Archivo</td>
					<td><input type="file" name="adjunto"></td>
				</tr>
				<tr>
					<td>Mensaje</td>
					<td><textarea name="mensaje" id="" cols="30" rows="10"></textarea></td>
				</tr>
			</table>
			<input type="hidden" name="phpmailer">
			<input type="submit" value="enviar formulario">
		</form>
	</body>


</html>