<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ajax y PHP aumentado</title>
</head>

<body>
	<h2>Mis Clientes</h2>
	<form action="">
		<select name="clientes">
			<?php
				$con = @mysqli_connect("localhost","root","pato1412","pruebaajax");
				if(!$con){
					echo "<p> Error al conectar con bd" . mysql_connect_error() . "</p>";
					exit;
				}
			
				$sentencia = 'select * from clientes';
				if(!($resultado = mysqli_query($con, $sentencia))){
					echo "<p>Error al ejecutar la consulta</p>";
				}
				while ($fila = mysqli_fetch_assoc($resultado)){

					echo "<option value = '{$fila['id']}'>{$fila['nombe']}</option>";

				}
				mysqli_free_result($resultado);
				mysqli_close($con);


			?>
		</select>
	</form>
	<div id="textAjax">
		la informacion del cliente se mostrara
	</div>

</body>

</html>