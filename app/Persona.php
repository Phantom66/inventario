<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //

    protected $table = 'personas';


    protected $fillable = [
    	'n_persona','apellido','fec_egreso'
    ];

    public function bienPersona()
    {
        return $this->hasMany('App\BienNacional');
    }
}
