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
use App\Periodo;
use App\Aula;
use App\Extra;
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

    public function registrarMateria(Request $request)
    {
        $grupo = new ItemSeguimiento();
        $grupo->seguimiento_idseguimiento = $request->input('numseguimiento');
        $grupo->materia_idmateria = 1;
        $grupo->horas_teoricas = 0;
        $grupo->save();

        $extra = new Extra();
        $extra->item_iditem = $grupo->iditem;
        $extra->facultad = 'FCYT';
        $extra->departamento = 'inf-sis';
        $extra->carrera = 'sistemas';
        $extra->interno = false;
        $extra->invitado = false;
        $extra->asistente = false;
        $extra->adjunto = false;
        $extra->save();

        $iditem = $grupo->iditem;
        $facultades = Facultad::All();
        return view('blog/seguimiento/seguimiento', ['facultades' => $facultades, 'iditem' => $iditem]);
    }
    public function activarMateria(Request $request)
    {
        $grupo = ItemSeguimiento::find($request->input('numitem'));
        $materia = Materia::where('nombre', $request->select('materia'))->first();
        $idmateria = $idmateria->idmateria;
        $grupo->materia_idmateria = $idmateria;
        $grupo->save();
    }
    public function modificarMateria(Request $request)
    {
        $facultades = Facultad::All();
        $iditem = $request->input('numitem');
        return view('blog/seguimiento/seguimiento', ['facultades' => $facultades, 'iditem' => $iditem]);
    }
    public function eliminarMateria()
    {}

    public function registrarHorario(Request $request)
    {

        $grupo = ItemSeguimiento::find($request->input('numitem'));
        $extra = $grupo->extra;

        $docente = $grupo->seguimiento->docente->nombre;

        $materia = Materia::where('nombre', $request->input('materia'))->first();
        $idmateria = $materia->idmateria;
        $grupo->materia_idmateria = $idmateria;
        $grupo->save();

        $extra->facultad = $request->input('facultad');
        $extra->departamento = $request->input('departamento');
        $extra->carrera = $request->input('carrera');
        $extra->interno = true;
        $extra->invitado = false;
        $extra->asistente = false;
        $extra->adjunto = false;
        $extra->save();

        $horas = Periodo::get(['horario'])->toArray();
        $aulas = Aula::get(['nombre_aula'])->toArray();

        return view('blog/seguimiento/grupo', ['horas' => $horas, 'aulas' => $aulas, 'docente' => $docente]);
    }
    public function activarHorario()
    {}
    public function modificarHorario()
    {}
    public function eliminarHorario()
    {}

    public function registrarSeguimiento($docenteDato)
    {
        $docente = Docente::where('nombre', $docenteDato)->first();
        $idDocente = $docente->iddocente;
        $seguimientoNuevo = Seguimiento::where('docente_iddocente', $idDocente)->get();
        if(count($seguimientoNuevo) == 0)
        {
            $seguimientoNuevo = new Seguimiento();
            $seguimientoNuevo->docente_iddocente = $idDocente;
            $seguimientoNuevo->save();
        }else
        {
            $seguimientoNuevo = $seguimientoNuevo[0];
        }

        $facultades = Facultad::All();

        $ide = $seguimientoNuevo->idseguimiento;
        $grupos = ItemSeguimiento::where('seguimiento_idseguimiento', $ide)->get();
        return view('blog/seguimiento/listagrupos', ['grupos' => $grupos, 'numseguimiento' => $ide]);
    }
    public function activarSeguimiento()
    {}
}
