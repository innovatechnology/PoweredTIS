<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carrera;
use App\Departamento;
use App\Facultad;
use App\Materia;
use App\Docente;
class SeguimientoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of minimal items needed.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $docentes = Docente::All();
        $facultades = Facultad::All();
        $departamentos = Departamento::All();
        $materias = Materia::All();
        $carreras = Carrera::All();
        return view('blog.seguimiento', array('facultades' => $facultades,
               'docentes' => $docentes, 'departamentos' => $departamentos,
               'materias' => $materias, 'carreras' => $carreras));
    }
}
