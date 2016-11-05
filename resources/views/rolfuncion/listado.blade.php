<html>
	<head>
		<title>Lista de {{$tipo}}</title>
	</head>
	<body>
		<?php
		for($i = 0; i < count($elementos); i++)
		{
			echo "<a href = \"";
			if(strcmp($tipo, "roles"))
			{
				echo "roles/editar/" + $elementos[i];
			}else{}
			if(strcmp($tipo, "funciones"))
			{
				echo "funciones/editar/" + $elementos[i];
			}else{}
			echo "\">" + $elementos[i] + "</a>";
			echo "<br>";
		}
		?>
		<form method = "post" action = "{{$tipo}}/">
		</form>
	</body>
</html>