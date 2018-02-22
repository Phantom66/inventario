<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    //

    protected $table = 'unidads';

    protected $fillable = [

    	'n_unidad', 'cod_ubi_admin', 'ubi_geo'
    ];
}
