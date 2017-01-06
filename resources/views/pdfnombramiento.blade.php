<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body BGCOLOR="#FFFFFF">
<table WIDTH="20%" border="0">
<caption>UNIVERSIDAD MAYOR DE SAN SIMON</caption>
</table>
<caption>COCHABABA - BOLIVIA</caption>
<table WIDTH="100%" border="4">
<caption>FORMULARIO DE SOLICITUD DE NOMBRAMIENTO PARA DOCENCIA EXTRAORDINARIA</caption>
</table>
<form action="../../form-result.php" method="post" target="_blank">

  <p><label for="pensamiento_id">1.-Nombre del profesional para quien se solicita nombramineto como Docente Extraordinario en la Universidad Mayor de San Simon: <output type="text" name="usuario">{{$nombreDocente}}</label></p>

 <p><label>2.- CARRERA QUE SOLICITA LA NOMINACION: <input type="text" name="usuario"></label></p>
<p><label>3.-DEPARTAMENTO: <input type="text" name="usuario"></label></p>
  <p><label>4.-FACULTAD: <input type="text" name="usuario"></label></p>
 <p><label>5.-DIPLOMA ACADEMICO: <output type="text" name="usuario" value = {{$diplomaAcademico}}>{{$diplomaAcademico}}</label></p>
<p><label>6.- TITULO PROFESIONAL EN PROVISION NACIONAL: <output type="text" name="usuario" value = {{$titulo}}>{{$titulo}}</label></p>
<p><label>7.-CATEGORIA DEL NOMBRAMIENTO SOLICIDATO: </label></p>
<input type="radio" name="sexo" id="varon" value="Varón">
<label for="varon">INTERINO </label>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">INVITADO: </label>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">ASISTENTE(A): </label>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">ADJUNTOS(B): </label>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">CATEDRATICO(C): </label>

		
<p><label>8.-Asignaturas(materias,modulos,semnario)que dictara HRS SEMANA: <input type="text" name="usuario"> HRS. MES <input type="text" name="usua"></label></p>
<?php
for($i = 0; $i < count($nombreMateria); $i++)
{
	$cadena = "<p><label>" . $nombreMateria[$i] . "<output>" . $siglaMateria[$i] . "</label></p>";
	echo($cadena);
}
?>
<p><label>9.-TIEMPO DE DEDICACION: </label></p>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">TIEMPO PARCIAL: </label>
<input type="radio" name="sexo" id="mujer" value="Mujer">
<label for="mujer">TIEMPO EXCLUSIVO: </label>
<p><label>10.- NOMBRAMIENTO APARTIR DE: <input type="text" name="usuario"></label></p>
<p><label>11.-TIEMPO DE DURACON DEL NOMBRAMIENTO: <output type="text" name="usuario" value = "UN SEMSTRE">UN SEMSTRE</label></p>
<p><label>12.-FECHA DE SOLICITUD: <input type="text" name="usuario"></label></p>



</form>
<table WIDTH="40%" border="0">
<caption>..........................................</caption>
<caption>		JEFE DE DEPARTAMENTO	</caption>
</table>        
</body>
</html>
