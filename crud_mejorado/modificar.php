<?php
	include('database.php');
	if (isset($_POST['id'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$id = $_POST['id'];
		$query = "UPDATE usuario SET nombre = '$nombre',apellido = '$apellido' WHERE id = '$id'";
		$resultado = mysqli_query($conexion, $query);

		if(!$resultado){
			die('sentencia ha fallado');
		}
		echo "Se Actualizó correctamente";
	}
?>