<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'descripcion', 'programa_id'
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }
}
