<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //ORM de la carrera
    protected $table = 'carrera';
    protected $primaryKey = 'idcarrera';
    public $timestamps = false;

    public function departamento()
    {
    	return $this->belongsTo('app/Departamento', 'departamento_iddepartamento', 'iddepartamento');
    }
}
