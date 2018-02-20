<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //

    protected $table = 'personans';


    protected $fillable = [
    	'nombre','apellido','fec_egreso'
    ];

    public function bienPersona()
    {
        return $this->hasMany('App\BienNacional');
    }
}
