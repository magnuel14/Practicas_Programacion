<?php
	include('database.php');
	$search = $_POST['search'];
	
		if(!empty($search)) {

			$query = "SELECT * from usuario WHERE apellido LIKE '$search%'";
			$result = mysqli_query($conexion,$query);
			if(!$result){
				die('Query con problemas'.mysqli_error($conexion));
			}
	
		
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
