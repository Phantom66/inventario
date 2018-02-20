<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    //

    protected $table = 'estatuses';


    protected $fillable = [

    	'descripcion',

    ];

      public function bienPersona()
    {
        return $this->hasMany('App\BienNacional');
    }

}
