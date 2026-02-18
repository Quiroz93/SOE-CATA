<?php

declare(strict_types=1);

namespace App\Http\Controllers\Publico;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use App\Http\Resources\Publico\ProgramaListResource;
use App\Http\Resources\Publico\ProgramaDetailResource;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgramaController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $programas = Programa::scopePublicado()
            ->select(['id', 'nombre', 'slug', 'estado'])
            ->with(['redesFormacionRelaciones' => function($q) {
                $q->select(['id', 'programa_id', 'red_formacion_id', 'estado'])
                  ->where('estado', 'activo')
                  ->with(['redFormacion:id,nombre']);
            }])
            ->orderByDesc('id')
            ->paginate(12);
        return ProgramaListResource::collection($programas);
    }

    public function show(string $slug): JsonResource
    {
        $programa = Programa::scopePublicado()
            ->select(['id', 'nombre', 'slug', 'descripcion', 'estado'])
            ->with([
                'redesFormacionRelaciones' => function($q) {
                    $q->select(['id', 'programa_id', 'red_formacion_id', 'estado'])
                      ->where('estado', 'activo')
                      ->with(['redFormacion:id,nombre,descripcion']);
                },
                'detalle:id,programa_id,objetivo,perfil_egreso',
                'multimedia:id,programa_id,url,tipo',
                'testimonios:id,programa_id,contenido,autor',
            ])
            ->where('slug', $slug)
            ->firstOrFail();
        return new ProgramaDetailResource($programa);
    }
}
