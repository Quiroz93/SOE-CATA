<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que representa una Oferta educativa.
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
	protected $table = 'ofertas';

	protected $fillable = [
		'centro_id',
		'nombre',
		'descripcion',
		'estado',
		'fecha_inicio',
		'fecha_fin',
		// Agregar otros campos según migración
	];

	protected $casts = [
		'fecha_inicio' => 'date',
		'fecha_fin' => 'date',
	];

	/**
	 * Relación con OfertaPrograma
	 */
	public function ofertaProgramas()
	{
		return $this->hasMany(OfertaPrograma::class);
	}

	public function preinscritos()
	{
		return $this->hasMany(Preinscrito::class);
	}
}
