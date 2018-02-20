<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //

    protected $table = 'unidads';

    protected $fillable = [

    	'nom_unidad', 'cod_ubi_admin', 'ubi_geo'
    ];
}
