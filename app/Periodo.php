<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo
{
    //ORM de nombramiento
    protected $table = 'periodo';
    protected $primaryKey = 'idperiodo';
    public $timestamps = false;

    public function Horas()
    {
    	return $this->hasMany('app/Hora', 'periodo_idperiodo', 'idperiodo');
    }
}