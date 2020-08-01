<?php

include('database.php');

if (isset($_POST['id'])) {
	$query = "SELECT * FROM usuario WHERE id = ".$_POST['id'];
	$resultado = mysqli_query($conexion, $query);
	if(!$resultado){
		die('sentencia ha fallado'. mysqli_error($connection));
	}
	
	$json = array();
  	while($row = mysqli_fetch_array($resultado)) {
    	$json[] = array(
      	'nombre' => $row['nombre'],
      	'apellido' => $row['apellido'],
      	'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>