<html>
	<head>
		<title>Datos de usuario</title>
	</head>
	<body>
		<form method = "post" action = "/usuarios/guardar">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type = "hidden" name = "correo" value = "{{$login}}">
			{{$login}}
			<br>
			Nombre: <input type = "text" name = "nombre">
			<br>
			Antiguo Password: <input type = "text" name = "password_viejo">
			<br>
			Nuevo Password: <input type = "text" name = "password">
			<br>
			<?php
			echo "roles: <br>";
			for($i = 0; $i < count($roles); $i++)
			{
				$cadena = "<input type = \"checkbox\" name = \"" . $roles[$i]['nombre_rol'] . "\" value = \"" . $roles[$i]['nombre_rol'] . "\">";
				echo $cadena;
				echo $roles[$i]['nombre_rol'];
				echo "<br>";
			}
			?>
			<input type = "submit" value = "Guardar">
		</form>
	</body>
</html>