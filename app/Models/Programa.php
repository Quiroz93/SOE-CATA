<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
	protected $fillable = [
		'nombre', 'codigo', 'descripcion', 'nivel', 'estado'
	];

	public function scopePublished($query)
	{
		return $query->where('estado', 'publicado');
	}

	public function competencias()
	{
		return $this->belongsToMany(Competencia::class, 'competencia_programa');
	}
}
