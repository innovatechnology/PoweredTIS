<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //orm para la facultad
    protected $table = 'docente';
    protected $primaryKey = 'iddocente';
    public $timestamps = false;

    public function carrera()
    {
    	return $this->hasOne('app/Seguimiento', 'docente_iddocente', 'iddocente');
    }
}