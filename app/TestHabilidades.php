<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestHabilidades extends Model
{


    public $timestamps = false;  
    protected $table = 'respuestas_habilidades'; 
    protected $fillable = [
        'user_id',
        'pregunta1',
        'pregunta2',
        'pregunta3',
        'pregunta4',
        'pregunta5',
        'pregunta6',
       
    ];
}