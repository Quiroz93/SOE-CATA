<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'estado'
    ];

    public function scopePublished($query)
    {
        return $query->where('estado', 'publicado');
    }
}
