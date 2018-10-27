<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    protected $table='ejemplar';

    protected $fillable = [
        'ubicacion_id','libro_id'
    ];
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
