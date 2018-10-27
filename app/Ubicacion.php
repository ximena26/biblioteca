<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table='ubicacion';

    protected $fillable = [
        'nombre','sede_id'
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }
}


