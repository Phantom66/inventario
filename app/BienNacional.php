<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BienNacional extends Model
{
    //

    protected $table = 'bien_nacionals';

     protected $fillable = [
       'cod_bien','nombre', 'marca','modelo','color','serial',
       'fec_adquisicion', 'valor'
    ];

    public function bienUser()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

     public function bienPersona()
    {
        return $this->belongsTo('App\Persona', 'persona_id', 'id');
    }


}
