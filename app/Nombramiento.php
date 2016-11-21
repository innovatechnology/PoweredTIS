<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombramiento
{
    //ORM de materia
    protected $table = 'nombramiento';
    protected $primaryKey = 'idnombramiento';
    public $timestamps = false;
}