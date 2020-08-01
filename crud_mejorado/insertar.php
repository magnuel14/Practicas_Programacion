<?php
	include('database.php');
	if (isset($_POST['nombre'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$query = "INSERT INTO usuario(nombre, apellido) VALUES ('$nombre', '$apellido')";
		$resultado = mysqli_query($conexion, $query);

		if(!$resultado){
			die('sentencia ha fallado');
		}
		echo "Se registró correctamente";
	}
?>