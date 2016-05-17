<title>Busqueda</title>

<form name="form1" method="post" action="busqueda.php" id="cdr">
	<p> <h2>Buscar usuario</h2>
		<input type="text" name="busca" id="busqueda">
		<input type="submit" nmae ="submit" value="buscar">
	</p>
	
</form>

<?php
	$busca = "";
	$busca = $_POST["busca"];

	mysql_connect("locahost", "root");
	mysql_select_db("prueba");

	if($busca != ""){
		$busqueda = mysql_query("select * from usuario where nombre like '%".$busca."%'")
	}


?>
<table width="805" borde="1">
	<tr>
		<td width="75">
			Id Usuario
		</td>
		<td width="136">
			Usuario
		</td>
		<td width="225">
			Nombre
		</td>
		<td width="88">
			Cargo
		</td>
		<td width="247">
			Fecha de Registro
		</td>
	</tr>



<?php
	while($muestra=mysql_fetch_array($busqueda)){
		echo '<tr>';
		echo '<td>'.$muestra["id_usuario"].'</td>';
		echo '<td>'.$muestra["usuario"].'</td>';
		echo '<td>'.$muestra["nombre"].'</td>';
		echo '<td>'.$muestra["cargo"].'</td>';
		echo '<td>'.$muestra["fecha_de_registro"].'</td>';

	}
?>

</table>