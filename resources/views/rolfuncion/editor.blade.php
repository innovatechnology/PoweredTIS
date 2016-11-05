<html>
	<head>
		<title>Datos de {{$tipo}}</title>
	</head>
	<body>
		<form method = "post" action = "{{$tipo}}">
			Nombre: <input type = "text" name = "nombre">
			<br>
			Descripcion: <input type = "text" name = "descripcion">
			<br>
			<?php
			if(strcmp($tipo, "roles"))
			{
				echo "Funciones: <br>";
				for($i = 0; i < count($listaFunciones); i++)
				{
					echo "<input type = \"checkbox\" name = \"" + $listaFunciones[i] + "\" value = \"" + $listaFunciones[i] + "\">";
					echo $listaFunciones[i];
				}
			}else{}
			?>
			<input type = "submit" value + "Guardar">
		</form>
	</body>
</html>