<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table = 'instructores';
    protected $fillable = [
        'nombre', 'perfil_descriptivo', 'experiencia', 'activo'
    ];
    protected $casts = [
        'activo' => 'boolean',
    ];

    public function programas()
    {
        return $this->belongsToMany(Programa::class, 'instructor_programa');
    }
}
