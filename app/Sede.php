<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table='sede';

    protected $fillable = [
        'nombre'
    ];

}
