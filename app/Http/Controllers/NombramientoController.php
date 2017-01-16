<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Nombramiento;
use App\Carrera;
use App\Departamento;
use App\Facultad;
use App\Materia;
use App\Docente;
use App\Http\Controllers\RolFuncionController;

class NombramientoController extends Controller
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
        //mostramos una lista de todas los formularios de nombramiento existentes
        $nombramientos = Nombramiento::All();
        $ver = RolFuncionController::tieneFuncion('Ver formularios de nombramiento');
        $editar = RolFuncionController::tieneFuncion('Editar formulario de nombramiento');
        $descargar = RolFuncionController::tieneFuncion('Generar PDF de formulario de nombramiento');
        $eliminar = RolFuncionController::tieneFuncion('Eliminar formulario de nombramiento');
        $crear = RolFuncionController::tieneFuncion('Crear formulario de nombramiento');
        return view('blog/nombramiento/lista', ['nombramientos' => $nombramientos,
            'ver' => $ver,
            'editar' => $editar,
            'descargar' => $descargar,
            'eliminar' => $eliminar,
            'crear' => $crear]);
    }
    public function nuevo()
    {
        if(RolFuncionController::tieneFuncion('Crear formulario de nombramiento'))
        {
            $docentes = Docente::All();
            return view('blog.nombramiento', array('docentes' => $docentes,
                'docenteActual' => null,
                'nombramiento' => null));
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }

    public function editar($docente)
    {
        if(RolFuncionController::tieneFuncion('Editar formulario de nombramiento'))
        {
            $propietario = Docente::where('nombre', $docente)->first();
            $nombramiento = $propietario->seguimiento->nombramiento;
            $docentes = Docente::All();
            return view('blog.nombramiento', array('docentes' => $docentes,
                'docenteActual' => $docente,
                'nombramiento'=> $nombramiento));
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }

    public function guardar(Request $request)
    {
        $docente = Docente::where('nombre', $request->input('docente'))->first();
        if($docente->seguimiento !== null)
        {
            //si existe el formulario de seguimiento para el docente
            $nombramiento = $docente->seguimiento->nombramiento;
        if($nombramiento === null)
        {
            $nombramiento = new Nombramiento;
        }else{}
            $nombramiento->seguimiento_idseguimiento = $docente->seguimiento->idseguimiento;
            $nombramiento->fecha_solicitud = $request->input('fecha2');
            $nombramiento->fecha_nombramiento = $request->input('fecha1');
            $nombramiento->tiempo = $request->input('categoria');
            $nombramiento->save();

            NombramientoController::index();
        }else
        {
            //si ese formulario de seguimiento no exise entonces mmandamos mensaje de error
            $mensaje = 'el docente al que usted desea asignar el formulario de nombramiento no cuenta con un formulario de seguimiento, asignele uno primero';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }

    public function ver($docente)
    {}

    public function descargar($docente)
    {}

    public function eliminar($docente)
    {}
}
