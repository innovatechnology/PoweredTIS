<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;

    public function sesion()
    {
    	return $this->hasOne('app/Sesion', 'usuario_idusuario', 'idusuario');
    }
    public function usuarioRol()
    {
    	return $this->hasMany('app/UsuarioRol', 'usuario_idusuario', 'idusuario');
    }
}
