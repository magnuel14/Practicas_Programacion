<?php
	include('database.php');
	$query = "SELECT * from usuario";
	$result = mysqli_query($conexion,$query);
	if(!$result){
		die('Query con problemas'.mysqli_error($conexion));
	}

	$json = array();
	while ($row = mysqli_fetch_array($result)) {
		$json[]= array(
			'nombre'=>$row['nombre'],
			'apellido'=>$row['apellido'],
			'id'=>$row['id']
		);
	}
	$jsonstring = json_encode($json);
	echo $jsonstring;
?>

