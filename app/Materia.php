<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //ORM de materia
    protected $table = 'materia';
    protected $primaryKey = 'idmateria';
    public $timestamps = false;

    public function departamento()
    {
    	return $this->belongsTo('app/Departamento', 'departamento_iddepartamento', 'iddepartamento');
    }
}
