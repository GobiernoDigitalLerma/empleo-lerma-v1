<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vacante extends Model
{
    protected $table = 'vacantes';
    protected $primaryKey = 'id_vacante'; 

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'titulo_puesto',
        'slug',
        'descripcion_breve',
        'FunActi_realizar',
        'conocimientos_requeridos',
        'habilidades_requeridos',
        'direccioncompleta',
        'tipo_empleo',
        'salario_mensual',
        'lugar_vacante',
        'dias_laboral',
        'hora_entrada',
        'hora_salida',
        'numero_plazas',
        'vigencia_vacante',
        'id_empresa',
        'is_covered',
        'covered_on_platform',
    ];

    public function scopeTitulo($query, $titulo)
    {
        if ($titulo)
            return $query->where('titulo_puesto', 'LIKE', "%$titulo%");
    }

    public function scopeLugar($query, $lugar)
    {
        if ($lugar)
            return $query->where('lugar_vacante', 'LIKE', "%$lugar%")
                ->orWhere('direccioncompleta', 'LIKE', "%$lugar%");
    }
   
public function empresa()
{
    return $this->belongsTo(Empresa::class, 'id_empresa', 'id_empresa');
}
public function informacionContacto()
{
    return $this->hasOne(InformacionContacto::class, 'id_vacante', 'id_vacante');
}


}
