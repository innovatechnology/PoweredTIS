<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolFuncion extends Model
{
    //
    protected $table = 'rol_funcion';
    protected $primaryKey = 'rol_idrol';
    //protected $primaryKey = 'rol_idrol, funcion_idfuncion';
    public $timestamps = false;

    public function rol()
    {
    	return $this->belongsTo('App\Rol', 'rol_idrol', 'idrol');
    }
    public function funcion()
    {
    	return $this->belongsTo('App\Funcion', 'funcion_idfuncion', 'idfuncion');
    }
}
