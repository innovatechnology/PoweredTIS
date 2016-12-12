<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultad;
use App\Departamento;
use App\Materia;
use App\Carrera;

class UniversidadController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*public function departamento($facultad)
    {
    	//devolvemos la lista de departamentos que corresponden a la facultad que nos pasan
    	$fac = Facultad::where('nombre', $facultad)->first();
    	$departamentos = $fac->departamento()->toArray();
    	return response()->json(array('resultado' => "o yah"));
    }*/
    public function departamento($facultad)
    {
    	//devolvemos la lista de departamentos que corresponden a la facultad que nos pasan
    	$fac = Facultad::where('nombre', $facultad)->first()->idfacultad;
        $departamentos = Departamento::where('facultad_idfacultad', $fac)->get();
    	return response()->json($departamentos);
    }
    public function carrera($departamento)
    {
    	//devolvemos la lista de carreras del departamento que nos digan
    	$dep = Departamento::where('nombre', $departamento)->first()->iddepartamento;
        $carreras = Carrera::where('departamento_iddepartamento', $dep)->get();
        return response()->json($carreras);
    }
    public function materia()
    {
    	//devolvemos una lista de materias del departamento que nos 
        //corregido, TODAS las materias
        $materias = Materia::All();
        return response()->json($materias);
    }

    public function prueba()
    {
    	return view('prueba');
    }
}
