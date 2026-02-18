<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Programa;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::published()->latest()->paginate(10);
        // Estructura JSON esperada por tests
        return response()->json($programas);
    }

    public function show($slug)
    {
        $programa = Programa::published()->where('slug', $slug)->first();
        if (!$programa) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        // Estructura JSON esperada por tests
        return response()->json($programa);
    }
}
