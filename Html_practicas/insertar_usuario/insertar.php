<?php
$conexion = mysql_connect("localhost","magnuel","pato1412","insertar");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$sql ="INSERT INTO usuario(nombre,apellido,usuario,password) values('$nombre',
'$apellido','$usuario','$password')";
 echo mysql_query($conexion,$sql);
?>