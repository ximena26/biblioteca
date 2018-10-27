<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  protected $table='estudiante';

    protected $fillable = [
        'nombre','apellido','carrera_id', 'usuario_id','semestre_id','jornada_id'
    ];

    public function carrera ()
    {
        return $this->belongsTo(Carrera::class);
    }
	public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }  // //
    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }  //
    public function jornada()
    {
        return $this->belongsTo(Jornada::class);
    }  //
}
