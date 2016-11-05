<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    //
    protected $table = 'funcion';
    protected $primaryKey = 'idfuncion';
    public $timestamps = false;

    public function rolFuncion()
    {
    	return $this->hasMany('app/RolFuncion', 'funcion_idfuncion', 'idfuncion');
    }
}
