<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombramiento
{
    //ORM de nombramiento
    protected $table = 'nombramiento';
    protected $primaryKey = 'idnombramiento';
    public $timestamps = false;

    public function seguimiento()
    {
    	return $this->belongsTo('app/Seguimiento', 'seguimiento_idseguimiento', 'idseguimiento');
    }
}