<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table='prestamo';

    protected $fillable = [
        'prestador_id', // el bilbiotecario que presta
        'receptor_id', //  el bibliotecario que recibe
        'usuario_id', //el usuario que solicita el préstamo
        'ejemplar_id',
        'fecha_prestamo',
        'fecha_devolucion_max',
        'fecha_devolucion'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    public function ejemplar()
    {
        return $this->belongsTo(Ejemplar::class);
    }
}
