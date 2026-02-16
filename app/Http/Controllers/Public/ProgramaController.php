<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Programa;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::published()->latest()->paginate(10);
        return view('public.programas.index', compact('programas'));
    }
    public function show(Programa $programa)
    {
        $programa->load('competencias');
        return view('public.programas.show', compact('programa'));
    }
}
