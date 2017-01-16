<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    public $timestamps = false;

    public function usuarioRol()
    {
    	return $this->hasMany('App\UsuarioRol', 'rol_idrol', 'idrol');
    }

    public function rolFuncion()
    {
    	return $this->hasMany('App\RolFuncion', 'rol_idrol', 'idrol');
    }
}
