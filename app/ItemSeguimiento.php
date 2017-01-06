<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;

class ItemSeguimiento extends Model
{
    //ORM de nombramiento
    protected $table = 'item_seguimiento';
    protected $primaryKey = 'iditem';
    public $timestamps = false;

    public function seguimiento()
    {
    	return $this->belongsTo('app/Seguimiento', 'seguimiento_idseguimiento', 'idseguimiento');
    }
    public function horas()
    {
    	return $this->hasMany('app/Hora', 'item_iditem', 'iditem');
    }
    public function materia()
    {
        return $this->belongsTo('App\Materia', 'materia_idmateria', 'idmateria');
    }
    public function extra()
    {
        return $this->hasOne('App\Extra', 'item_iditem', 'iditem');
    }
}