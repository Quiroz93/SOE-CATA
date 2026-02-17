<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RedFormacion extends Model
{
    use SoftDeletes;

    protected $table = 'red_formacion';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
    ];

    protected $dates = ['deleted_at'];

    public function programaRelaciones()
    {
        return $this->hasMany(ProgramaRedFormacion::class);
    }
}