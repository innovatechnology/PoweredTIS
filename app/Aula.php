<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSeguimiento
{
    //ORM de nombramiento
    protected $table = 'aula';
    protected $primaryKey = 'idaula';
    public $timestamps = false;

    public function Horas()
    {
    	return $this->hasMany('app/Hora', 'aula_idaula', 'idaula');
    }
}