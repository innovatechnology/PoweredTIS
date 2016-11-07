<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Rol;
use App\Funcion;
use App\Sesion;
use App\UsuarioRol;
use App\RolFuncion;

class RolFuncionController extends Controller
{
    //

    public function roles()
    {
        $tipo = "roles";
        $elementos = Rol::get(['nombre_rol'])->toArray();
        return view('rolfuncion/listado', ['tipo' => $tipo, 'elementos' => $elementos]);
    }
    public function funciones()
    {
        $tipo = "funciones";
        $elementos = Funcion::get(['nombre_funcion'])->toArray();
        return view('rolfuncion/listado', ['tipo' => $tipo, 'elementos' => $elementos]);
    }

    public function editarRoles($nombre)
    {
        $tipo = "roles";
        $listaFunciones = Funcion::get(['nombre_funcion'])->toArray();
        //$rol = Rol::first()->where('nombre_rol', $nombre)->toArray();
        return view('rolfuncion/editor', ['tipo' => $tipo, 'listaFunciones' => $listaFunciones]);
    }
    public function editarFunciones($nombre)
    {
        $tipo = "funciones";
        //$funcion = Funcion::first()->where('nombre_funcion', $nombre)->toArray();
        return view('rolfuncion/editor', ['tipo' => $tipo]);
    }

    public function crearRoles()
    {
        $tipo = "roles";
        $listaFunciones = Funcion::get(['nombre_funcion'])->toArray();
        return view('rolfuncion/editor', ['tipo' => $tipo, 'listaFunciones' => $listaFunciones]);
    }
    public function crearFunciones()
    {
        $tipo = "funciones";
        return view('rolfuncion/editor', ['tipo' => $tipo]);
    }

    public function guardarRoles(Request $request)
    {
        $nuevoRol = Rol::where('nombre_rol', $request->input('nombre'))->get()->toArray();
        if(count($nuevoRol) == 0)
        {
            $nuevoRol = new Rol;
        }else
        {
            $aux = $nuevoRol[0]['idrol'];
            $nuevoRol = Rol::find($aux);
        }
        $nuevoRol->nombre_rol = $request->input('nombre');
        $nuevoRol->descripcion_rol = $request->input('descripcion');
        $nuevoRol->save();
        //ahora le colocamos las funciones del rol
        $funciones = Funcion::get(['idfuncion', 'nombre_funcion'])->toArray();
        //borrando antiguas funciones
        $antiguos = RolFuncion::where('rol_idrol', $nuevoRol->idrol)->get();
        for($i = 0; $i < count($antiguos); $i++)
        {
            $antiguos[$i]->delete();
        }
        for($i = 0; $i < count($funciones); $i++)
        {
            $tiene = $request->input('' . $funciones[$i]['nombre_funcion']) !== null;
            if($tiene)
            {
                //significa que tiene  chekeado esta funcion
                $relacion = new RolFuncion;
                $relacion->rol_idrol = $nuevoRol->idrol;
                $relacion->funcion_idfuncion = $funciones[$i]['idfuncion'];
                $relacion->save();
            }else{}
        }
        return view('exito');
    }
    public function guardarFunciones(Request $request)
    {
        $nuevaFuncion = Funcion::where('nombre_funcion', $request->input('nombre'))->get()->toArray();
        if(count($nuevaFuncion) == 0)
        {
            $nuevaFuncion = new Funcion;
        }else
        {
            $aux = $nuevaFuncion[0]['idfuncion'];
            $nuevaFuncion = Funcion::find($aux);
        }
        $nuevaFuncion->nombre_funcion = $request->input('nombre');
        $nuevaFuncion->descripcion_funcion = $request->input('descripcion');
        $nuevaFuncion->save();
        return view('exito');
    }
/*
    public function usuarios()
    public function editarUsuarios()
    public function eliminarUsuarios()
    public function guardarUsuarios()*/
}
