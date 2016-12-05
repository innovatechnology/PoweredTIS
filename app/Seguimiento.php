<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombramiento extends Model
{
    //ORM de seguimiento
    protected $table = 'seguimiento';
    protected $primaryKey = 'idseguimiento';
    public $timestamps = false;

    public function nombramiento()
    {
    	return $this->hasOne('app/Nombramiento', 'seguimiento_idseguimiento', 'idseguimiento');
    }

    public function items()
    {
    	return $this->hasMany('app/ItemSeguimiento', 'seguimiento_idseguimiento', 'seguimiento');
    }
}