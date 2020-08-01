<?php
	include('database.php');
	if (isset($_POST['nombre'])) {
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$materia = $_POST['materia'];
		$nota1 = $_POST['nota1'];
		$nota2 = $_POST['nota2'];
		$nota3 = $_POST['nota3'];
		$nota4 = $_POST['nota4'];
		$nota5 = $_POST['nota5'];
		$nota6 = $_POST['nota6'];

		$suma = $_POST['suma'];
		$promedio = $_POST['promedio'];
		$estado = $_POST['estado'];



		$query = "INSERT INTO estudiante(nombre, apellido,cedula,materia,nota1,nota2,nota3,nota4,nota5,nota6,suma, promedio,estado) 
		values ('$nombre', '$apellido','$cedula','$materia','$nota1','$nota2','$nota3','$nota4','$nota5','$nota6','$suma','$promedio','$estado')";
		$resultado = mysqli_query($conexion, $query);

		if(!$resultado){
			die('sentencia ha fallado');
		}
		echo "Se registró correctamente";
	}
?>