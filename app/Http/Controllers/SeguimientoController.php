<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carrera;
use App\Departamento;
use App\Facultad;
use App\Materia;
use App\Docente;
use App\Seguimiento;
use App\ItemSeguimiento;
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
        //esto no
        $departamentos = Departamento::All();
        $materias = Materia::All();
        $carreras = Carrera::All();
        return view('blog.seguimiento', array('facultades' => $facultades,
               'docentes' => $docentes, 'departamentos' => $departamentos,
               'materias' => $materias, 'carreras' => $carreras));
    }

    public function registrarMateria()
    {
        /*$nuevoItem = new ItemSeguimiento;
        $docente = Docente::where('nombre', $request->input('doc_name'))->first();
        $idDocente = $docente->iddocente;
        $seguimiento = Seguimiento::where('docente_iddocente', $idDocente)->first();
        $idSeguimiento = $seguimiento->idseguimiento;
        $nuevoItem->seguimiento_idseguimiento = $idSeguimiento;
        $materia = Materia::where('nombre', $request->input('materia'))->first();
        $idMateria = $materia->idmateria;
        $nuevoItem->materia_idmateria = $idMateria;
        $nuevoItem->horas_teoricas = 0;
        $nuevoItem->save();*/

        return view('blog/seguimiento/grupo');
    }
    public function activarMateria()
    {}
    public function modificarMateria()
    {}
    public function eliminarMateria()
    {}

    public function registrarHorario()
    {}
    public function activarHorario()
    {}
    public function modificarHorario()
    {}
    public function eliminarHorario()
    {}

    public function registrarSeguimiento($docente)
    {
        /*$seguimientoNuevo = new Seguimiento;
        $docente = Docente::where('nombre', $request->input('doc_name'))->first();
        $idDocente = $docente->iddocente;
        $seguimientoNuevo->docente_iddocente = $idDocente;
        $seguimiento->save();*/

        $facultades = Facultad::All();
        return view('blog/seguimiento/seguimiento', ['facultades' => $facultades, 'docente' => $docente]);
    }
    public function activarSeguimiento()
    {}
}
