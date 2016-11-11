<html>
	<head>
		<title>Lista de usuarios</title>
	</head>
	<body>
		<?php
		for($i = 0; $i < count($elementos); $i++)
		{
			$cadena = "<a href = \"/usuarios/editar/" . $elementos[$i]['login'] . "\">" . $elementos[$i]['login'] . "</a> <a href =  \"/usuarios/eliminar/" . $elementos[$i]['login'] . "\">eliminar</a> <br>";
			echo $cadena;
		}
		?>
	</body>
</html>