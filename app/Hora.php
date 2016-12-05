<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    //ORM de nombramiento
    protected $table = 'hora';
    protected $primaryKey = 'idhora';
    public $timestamps = false;

    public function item()
    {
    	return $this->belongsTo('app/ItemSeguimiento', 'item_iditem', 'iditem');
    }
    public function aula()
    {
    	return $this->belongsTo('app/Aula', 'aula_idaula', 'idaula');
    }
    public function periodo()
    {
    	return $this->belongsTo('app/Periodo', 'periodo_idperiodo', 'idperiodo');
    }
}