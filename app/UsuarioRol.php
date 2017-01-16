<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    //
    protected $table = 'usuario_rol';
    protected $primaryKey = 'usuario_idusuario';
    //protected $primaryKey = ['usuario_idusuario', 'rol_idrol'];
    public $timestamps = false;

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario', 'usuario_idusuario', 'idusuario');
    }
    public function rol()
    {
    	return $this->belongsTo('App\Rol', 'rol_idrol', 'idrol');
    }
}
