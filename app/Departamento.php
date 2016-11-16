<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //ORM de la tabla departamento
    protected $table = 'departamento';
    protected $primaryKey = 'iddepartamento';
    public $timestamps = false;

    public function materia()
    {
    	return $this->hasMany('app/Materia', 'departamento_iddepartamento', 'iddepartamento');
    }

    public function carrera()
    {
    	return $this->hasMany('app/Carrera', 'departamento_iddepartamento', 'iddepartamento');
    }
}
