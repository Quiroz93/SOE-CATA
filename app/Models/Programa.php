
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que representa un Programa académico.
 */
class Programa extends Model
{
	protected $fillable = [
		'nombre', 'codigo', 'descripcion', 'nivel', 'estado'
	];

	/**
	 * Relación con OfertaPrograma
	 */
	public function ofertaProgramas()
	{
		return $this->hasMany(OfertaPrograma::class);
	}

	public function scopePublished($query)
	{
		return $query->where('estado', 'publicado');
	}

	public function competencias()
	{
		return $this->belongsToMany(Competencia::class, 'competencia_programa');
	}
}
