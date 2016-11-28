//esto es para colocar luego donde se supone que debe ir

function getFacultades()
{
	$facultades = Facultad::get(['nombre'])->toArray();
	return $facultades;
}

function getDepartamentos($facultad)
{
	//considerando que $facultad es un String
	$fac = Facultad::where('nombre', $facultad)->get(['idfacultad'])->toArray();
	$idfac = $facultad[0];
	$departamentos = Departamento::where('facultad_idfacultad', $idfac)->get(['nombre'])-toArray();
	return $departamentos;
}

function getCarreras($departamento)
{
	//considerando que $departamento es un String
	$dep = Departamento::where('nombre', $departamento)->get(['iddepartamento'])->toArray();
	$iddep = $dep[0];
	$carreras = Carrera::where('departamento_iddepartamento', $iddep)->get(['nombre'])-toArray();
	return $carreras;
}

function getMaterias($departamento)
{
	//considerando que $departamento es un String
	$dep = Departamento::where('nombre', $departamento)->get(['iddepartamento'])->toArray();
	$iddep = $dep[0];
	$materias = Materia::where('departamento_iddepartamento', $iddep)->get(['nombre'])-toArray();
	return $materias;
}