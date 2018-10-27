<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table='usuario';

    protected $fillable = [
        'nombre','sede_id'
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }
}
