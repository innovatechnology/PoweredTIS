<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemSeguimiento;
use App\Docente;
use App\Usuario;
use App\User;
use App\Seguimiento;

use PDF;

class DatosController extends Controller
{
    //este es el ccontrolador de recuperacion de los datos de los formularios

    public function armarSeguimiento(Request $request, $doc)
    {
    	//el monbre del docente
    	$nombreDocente = $doc;
    	$docente = Docente::where('nombre', $nombreDocente)->first();
    	$idseguimiento = $docente->seguimiento->idseguimiento;
    	$items = ItemSeguimiento::where('seguimiento_idseguimiento', $idseguimiento)->get();
    	$nombreMateria = array();
        $siglaMateria = array();
        $facultad = array();
        $departamento = array();
        $carrera = array();
        for($i = 0; $i < count($items); $i++)
        {
            $nombreMateria[] = $items[$i]->materia->nombre;
            $siglaMateria[] = $items[$i]->materia->sigla;
            $facultad[] = $items[$i]->extra->facultad;
            $departamento[] = $items[$i]->extra->departamento;
            $carrera[] = $items[$i]->extra->carrera;
        }
    	$blogs = User::all();
    	view()->share('blogs', $blogs);
    		$pdf = PDF::loadView('pdf', ['nombreDocente' => $nombreDocente, 'nombreMateria' => $nombreMateria, 'siglaMateria' => $siglaMateria, 'facultad' => $facultad, 'departamento' => $departamento, 'carrera' => $carrera])->setPaper('a4','landscape');
    		return $pdf->download('seguimiento.pdf');
    }

    public function armarNombramiento(Request $request)
    {
    	//$nombreDocente = $request-input('docente');
    	$nombreDocente = $request->input('docente');
        $fecha1 = $request->input('fecha1');
        $fecha2 = $request->input('fecha2');
    	$docente = Docente::where('nombre', $nombreDocente)->first();
    	$idseguimiento = $docente->seguimiento->idseguimiento;
    	$items = ItemSeguimiento::where('seguimiento_idseguimiento', $idseguimiento)->get();
    	$nombreMateria = array();
    	$siglaMateria = array();
        $facultad = array();
        $departamento = array();
        $carrera = array();
    	for($i = 0; $i < count($items); $i++)
    	{
    		$nombreMateria[] = $items[$i]->materia->nombre;
    		$siglaMateria[] = $items[$i]->materia->sigla;
            $facultad[] = $items[$i]->extra->facultad;
            $departamento[] = $items[$i]->extra->departamento;
            $carrera[] = $items[$i]->extra->carrera;
    	}
    	//carrera departamento facultad
    	$diplomaAcademico = $docente->diploma_academico;
    	$titulo = $docente->titulo;
    	//categoria
    	//$horasSemana ;
    	//$horasMes ;
    	//tiempo dedicacion
    	//$fechaSolicitud ;

    	$blogs = User::all();
    	view()->share('blogs', $blogs);
    		$pdf = PDF::loadView('pdfnombramiento', ['nombreDocente' => $nombreDocente, 'nombreMateria' => $nombreMateria, 'siglaMateria' => $siglaMateria, 'facultad' => $facultad, 'departamento' => $departamento, 'carrera' => $carrera, 'diplomaAcademico' => $diplomaAcademico, 'titulo' => $titulo, 'fecha1' => $fecha1, 'fecha2' => $fecha2])->setPaper('a4','portrait');
    		return $pdf->download('nombramiento.pdf');
    }
}