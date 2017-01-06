<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    //orm de la tabla extra
    protected $table = 'extra';
    protected $primaryKey = 'idextra';
    public $timestamps = false;

    public function item()
    {
    	return $this->belongsTo('App\ItemSeguimiento', 'item_iditem', 'iditem');
    }
}
