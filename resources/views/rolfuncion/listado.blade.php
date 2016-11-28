<html>
	<head>
		<title>Lista de {{$tipo}}</title>
	</head>
	<body>
		<?php
		for($i = 0; $i < count($elementos); $i++)
		{
			if(strcmp($tipo, "roles") == 0)
			{
				$cadena = "<a href = \"roles/editar/" . $elementos[$i]['nombre_rol'] . "\">" . $elementos[$i]['nombre_rol'] . "</a>" . "<br>";
			}else{}
			if(strcmp($tipo, "funciones") == 0)
			{
				$cadena = "<a href = \"funciones/editar/" . $elementos[$i]['nombre_funcion'] . "\">" . $elementos[$i]['nombre_funcion'] . "</a>" . "<br>";
			}
			echo $cadena;
		}
		?>
		<form method = "post" action = "/{{$tipo}}/crear">
			<input type = "submit" value = "Crear Nuevo">
		</form>
	</body>
</html>