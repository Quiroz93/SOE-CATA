<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que representa la relación operativa entre Oferta y Programa.
 * No es un pivot simple, tiene identidad y lógica propia.
 */
class OfertaPrograma extends Model
{
    protected $table = 'oferta_programa';

    protected $fillable = [
        'oferta_id',
        'programa_id',
        'cupos',
        'fecha_inicio',
        'fecha_fin',
        // Agregar otros campos según migración
    ];

    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'cupos' => 'integer',
    ];

    /**
     * Relación con Oferta
     */
    public function oferta()
    {
        return $this->belongsTo(Oferta::class);
    }

    /**
     * Relación con Programa
     */
    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    /**
     * Relación con Preinscrito
     */
    public function preinscritos()
    {
        return $this->hasMany(Preinscrito::class);
    }
}
