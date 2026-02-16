<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'descripcion'
    ];

    public function programas()
    {
        return $this->belongsToMany(Programa::class, 'competencia_programa');
    }
}
