<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que representa la preinscripción de un usuario a un programa en una oferta.
 */
class Preinscrito extends Model
{
    protected $table = 'preinscritos';

    protected $fillable = [
        'oferta_programa_id',
        'oferta_id',
        'documento',
        'nombre',
        'email',
        // Agregar otros campos según migración
    ];

    /**
     * Relación con OfertaPrograma
     */
    public function ofertaPrograma()
    {
        return $this->belongsTo(OfertaPrograma::class, 'oferta_programa_id');
    }

    /**
     * Relación directa con Oferta (opcional, para consultas rápidas)
     */
    public function oferta()
    {
        return $this->belongsTo(Oferta::class);
    }
}
