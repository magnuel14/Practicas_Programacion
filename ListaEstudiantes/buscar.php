<?php
	include('database.php');
	$dato = $_POST['dato'];

	$search = $_POST['search'];
	
		if(!empty($search)) {

			$query = "SELECT * from estudiante WHERE $dato LIKE '$search%'";
			$result = mysqli_query($conexion,$query);
			if(!$result){
				die('Query con problemas'.mysqli_error($conexion));
			}
	
		
	}
	$json = array();
	while ($row = mysqli_fetch_array($result)) {
		$json[]= array(
			'nombre' => $row['nombre'],
		'apellido' => $row['apellido'],
      	'cedula' => $row['cedula'],
		'materia' => $row['materia'],
		'nota1' => $row['nota1'],
		'nota2' => $row['nota2'],
		'nota3' => $row['nota3'],
		'nota4' => $row['nota4'],
		'nota5' => $row['nota5'],
		'nota6' => $row['nota6'],

		'suma' => $row['suma'],
		'promedio' => $row['promedio'],
		'estado' => $row['estado'],

      	'id' => $row['id']
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;
?>
