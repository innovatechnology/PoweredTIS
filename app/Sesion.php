<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    //
    protected $table = 'sesion';
    protected $primaryKey = 'idsesion, usuario_idusuario';
    public $timestamps = false;

    public function usuario()
    {
    	return $this->belongsTo('app/Sesion', 'usuario_idusuario', 'idusuario');
    }
}
