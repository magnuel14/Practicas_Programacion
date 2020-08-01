<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax y PHP aumentado</title>
	<script>
		function crearXMLHttpRequest(){
			var xmlHttp = null;
			if (window.XMLHttpRequest) {
				xmlHttp = new XMLHttpRequest();
			}
			return xmlHttp;
		}

		function mostrarCliente(str){
			var xmlHttp;
			if (str=="") {
				document.getElementById("textAjax").innerHtml="No hay valores";
				return;
			}




			xmlHttp = crearXMLHttpRequest();
			xmlHttp.onreadystatechange=function(){
				if (xmlHttp.readyState==4  && xmlHttp.status== 200) {
					document.getElementById("textAjax").innerHtml = xmlHttp.responseText;
				}
			}


			xmlHttp.open("Get","getCliente.php?id="+str,true);
			xmlHttp.send();
		}
	</script>


</head>
<body>	
	<h2>Mis Clientes</h2>
	<form action="">
		<select name="clientes" onchange="mostrarCliente(this.value)">
			<?php
				$con = @mysqli_connect("localhost","magnuel","pato1412","pruebaajax");
				if(!$con){
					echo "<p> Error al conectar con bd" . mysql_connect_error() . "</p>";
					exit;
				}
				$sentencia = 'select * form clientes';
				if(!($resultado = mysqli_query($con, $sentencia))){
					echo "<p>Error al ejecutar la consulta</p>";
				}
				while ($fila = mysqli_fetch_assoc($resultado)){

					echo "<option value = '{$fila['Id']}'>{$fila['nombe']}</option>";

				}
				mysqli_free_result($resultado);
				mysqli_close($con);


			?>
		</select>
	</form>

	<div id="textAjax">
		la informacion del cloiente se mostrara
	</div>

</body>
</html>