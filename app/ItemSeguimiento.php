<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    public function Horas()
    {
    	return $this->hasMany('app/Hora', 'item_iditem', 'iditem');
    }
}