<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    //
    protected $table = 'usuario_rol';
    protected $primaryKey = 'usuario_idusuario, rol_idrol';
    public $timestamps = false;

    public function usuario()
    {
    	return $this->belongsTo('app/Usuario', 'usuario_idusuario', 'idusuario');
    }
    public function rol()
    {
    	return $this->belongsTo('app/Rol', 'rol_idrol', 'idrol');
    }
}
