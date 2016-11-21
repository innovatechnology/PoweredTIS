<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //orm para la facultad
    protected $table = 'docente';
    protected $primaryKey = 'iddocente';
    public $timestamps = false;

}