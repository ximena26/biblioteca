<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
  protected $table='docente';

    protected $fillable = [
        'nombre','apellido','facultad_id','usuario_id'
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }  //
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }  //
}
