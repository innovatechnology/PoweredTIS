<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Usuario;
use App\Rol;
use App\Funcion;
use App\Sesion;
use App\UsuarioRol;
use App\RolFuncion;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RolFuncionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function funciones()
    {
        $user = Auth::user();
        $id = $user->id;
        $funcionesActuales = DB::select('SELECT DISTINCT funcion.nombre_funcion FROM usuario, usuario_rol, rol_funcion, funcion WHERE funcion.idfuncion = rol_funcion.funcion_idfuncion and rol_funcion.rol_idrol = usuario_rol.rol_idrol and usuario_rol.usuario_idusuario = ' . $id);
        return $funcionesActuales;
    }

    public static function tieneFuncion($buscado)
    {
        //este metodo indica si es que el usuario actual tiene la funcion indicada
        $funcionesActuales = RolFuncionController::funciones();
        $encontrado = false;
        for($i = 0; $i < count($funcionesActuales) && !$encontrado; $i++)
        {
            if($funcionesActuales[$i]->nombre_funcion == $buscado)
            {
                $encontrado = true;
            }else{}
        }
        return $encontrado;
    }

    public function roles()
    {
        if(RolFuncionController::tieneFuncion('Administrar roles'))
        {
            $tipo = "roles";
            $elementos = Rol::where('nombre_rol', '!=', 'Administrador')->get(['nombre_rol'])->toArray();
            return view('rolfuncion/listado', ['tipo' => $tipo, 'elementos' => $elementos]);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function editarRoles($nombre)
    {
        if(RolFuncionController::tieneFuncion('Administrar roles'))
        {
            $tipo = "roles";
            $listaFunciones = Funcion::get(['idfuncion', 'nombre_funcion'])->toArray();
            $rol = Rol::where('nombre_rol', $nombre)->where('nombre_rol', '!=', 'Administrador')->first();
            if($rol !== null)
            {
                return view('rolfuncion/editor', ['tipo' => $tipo, 'listaFunciones' => $listaFunciones, 'id' => $rol->idrol, 'nombre' => $rol->nombre_rol, 'descripcion' => $rol->descripcion_rol]);
            }else
            {
                $mensaje = 'El rol que usted desea editar no existe o es el rol Administrador';
                return view('excepcion', ['mensaje' => $mensaje]);
            }
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function crearRoles()
    {
        if(RolFuncionController::tieneFuncion('Administrar roles'))
        {
            $tipo = "roles";
            $listaFunciones = Funcion::get(['nombre_funcion'])->toArray();
            return view('rolfuncion/editor', ['tipo' => $tipo, 'listaFunciones' => $listaFunciones, 'id' => -1, 'nombre' => '', 'descripcion' => '']);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function guardarRoles(Request $request)
    {
        if(RolFuncionController::tieneFuncion('Administrar roles'))
        {
            $nuevoRol = Rol::where('idrol', $request->input('identificador'))->get()->toArray();
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
                $tiene = $request->input($funciones[$i]['idfuncion']) !== null;
                if($tiene)
                {
                    //significa que tiene  chekeado esta funcion
                    $relacion = new RolFuncion;
                    $relacion->rol_idrol = $nuevoRol->idrol;
                    $relacion->funcion_idfuncion = $funciones[$i]['idfuncion'];
                    $relacion->save();
                }else{}
            }
            $tipo = "roles";
            $elementos = Rol::where('nombre_rol', '!=', 'Administrador')->get(['nombre_rol'])->toArray();
            return view('rolfuncion/listado', ['tipo' => $tipo, 'elementos' => $elementos]);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function usuarios()
    {
        if(RolFuncionController::tieneFuncion('Administrar permisos de usuario'))
        {
            $elementos = Usuario::where('alta', true)->get(['login'])->toArray();
            return view('rolfuncion/usuarios', ['elementos' => $elementos]);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function editarUsuarios($nombre_usuario)
    {
        if(RolFuncionController::tieneFuncion('Administrar permisos de usuario'))
        {
            $usuario = Usuario::where('login', $nombre_usuario)->where('alta', true)->where('login', '!=', 'administrador@innova.com')->first();
            if($usuario !== null)
            {
                $login = $usuario->login;
                $nombre = $usuario->nombre;
                $roles = Rol::get(['nombre_rol'])->toArray();
                return view('rolfuncion/editarUsuarios', ['nombre' => $nombre, 'login' => $login, 'roles' => $roles]);
            }else
            {
                $mensaje = 'el usuario del que usted desea modificar los permisos no existe o esta protegido';
                return view('excepcion', ['mensaje' => $mensaje]);
            }
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function eliminarUsuarios($login)
    {
        if(RolFuncionController::tieneFuncion('Administrar permisos de usuario'))
        {
            $usuario = Usuario::where('login', $login)->where('alta', true)->first();
            if($usuario !== null)
            {
                $usuario->alta = false;
                $usuario->save();
                $user = User::where('email', $login)->first();
                $user->delete();
            }else{}
            $elementos = Usuario::where('alta', true)->get(['login'])->toArray();
            return view('rolfuncion/usuarios', ['elementos' => $elementos]);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }
    public function guardarUsuarios(Request $request)
    {
        if(RolFuncionController::tieneFuncion('Administrar permisos de usuario'))
        {
            $usuario = Usuario::where('login', $request->input('correo'))->where('alta', true)->first();
            //ahora le colocamos roles a los usuarios
            $roles = Rol::get(['idrol', 'nombre_rol'])->toArray();
            //borrando antiguos roles
            $antiguos = UsuarioRol::where('usuario_idusuario', $usuario->idusuario)->get();
            for($i = 0; $i < count($antiguos); $i++)
            {
                $antiguos[$i]->delete();
            }
            //colocamos los nuevos roles
            for($i = 0; $i < count($roles); $i++)
            {
                $tiene = $request->input('' . $roles[$i]['nombre_rol']) !== null;
                if($tiene)
                {
                    //significa que tiene  chekeado esta funcion
                    $relacion = new UsuarioRol;
                    $relacion->usuario_idusuario = $usuario->idusuario;
                    $relacion->rol_idrol = $roles[$i]['idrol'];
                    $relacion->save();
                }else{}
            }
            $elementos = Usuario::where('alta', true)->get(['login'])->toArray();
            return view('rolfuncion/usuarios', ['elementos' => $elementos]);
        }else
        {
            $mensaje = 'usted no tiene permiso para hacer esto';
            return view('excepcion', ['mensaje' => $mensaje]);
        }
    }

    public function editarPerfil()
    {
        //cargamos el perfil del usuario activo
        $user = Auth::user();
        $usuarioActual = Usuario::find($user->id);
        return view('rolfuncion/editarperfil', ['usuario' => $usuarioActual]);
    }

    public function guardarPerfil(Request $request)
    {
        //guardamos la nueva informacion del perfil
    }

    public function cosasBorradas()
    {
        //eliminado
        //de los cambios en los usuarios
        $usuario->nombre = $request->input('nombre');   
        $usuario->password = $request->input('password');
        $usuario->save();
        $user = User::where('email', $request->input('correo'))->first();
        $user->name = $request->input('nombre');
        $user->save();
        $user->forceFill([
            'password' => bcrypt($request->input('password')),
            'remember_token' => Str::random(60),
        ])->save();
    }
}
