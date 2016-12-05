<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    //orm para la facultad
    protected $table = 'facultad';
    protected $primaryKey = 'idfacultad';
    public $timestamps = false;

    public function departamento()
    {
    	return $this->hasMany('App\Departamento', 'facultad_idfacultad', 'idfacultad');
    }
}
