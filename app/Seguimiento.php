<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    //ORM de seguimiento
    protected $table = 'seguimiento';
    protected $primaryKey = 'idseguimiento';
    public $timestamps = false;

    public function nombramiento()
    {
    	return $this->hasOne('App\Nombramiento', 'seguimiento_idseguimiento', 'idseguimiento');
    }

    public function items()
    {
    	return $this->hasMany('App\ItemSeguimiento', 'seguimiento_idseguimiento', 'seguimiento');
    }
}