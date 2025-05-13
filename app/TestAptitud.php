<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestAptitud extends Model
{


    public $timestamps = false;  
    protected $table = 'respues_aptitud'; 
    protected $fillable = [
        'user_id',
        'habilidad_mas_destacada',
        'motivacion_trabajo',
        'manejo_estres',
        'mayor_logro_profesional',
        'trabajo_equipo',
        'habilidades_mejorar',
       
    ];
}
