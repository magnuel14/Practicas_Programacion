<?php
	include('database.php');
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$query = "DELETE FROM usuario WHERE id = $id";
		$resultado = mysqli_query($conexion, $query);

		if(!$resultado){
			die('sentencia ha fallado');
		}
		echo "elemento Eliminado";
	}
?>