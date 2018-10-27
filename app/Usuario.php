<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';

    protected $fillable = [
        'usuario','password','tipo_usuario_id'
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }
   
}
