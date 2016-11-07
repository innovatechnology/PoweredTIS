<html>
	<head>
		<title>Datos de {{$tipo}}</title>
	</head>
	<body>
		<form method = "post" action = "/{{$tipo}}/guardar">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			Nombre: <input type = "text" name = "nombre">
			<br>
			Descripcion: <input type = "text" name = "descripcion">
			<br>
			<?php
			if(strcmp($tipo, "roles") == 0)
			{
				echo "Funciones: <br>";
				for($i = 0; $i < count($listaFunciones); $i++)
				{
					$cadena = "<input type = \"checkbox\" name = \"" . $listaFunciones[$i]['nombre_funcion'] . "\" value = \"" . $listaFunciones[$i]['nombre_funcion'] . "\">";
					echo $cadena;
					echo $listaFunciones[$i]['nombre_funcion'];
					echo "<br>";
				}
			}else{}
			?>
			<input type = "submit" value = "Guardar">
		</form>
	</body>
</html>