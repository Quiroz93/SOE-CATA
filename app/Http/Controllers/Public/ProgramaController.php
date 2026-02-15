<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Programa;

class ProgramaController extends Controller
{
    public function index()
    {
        return view('public.programas.index');
    }
    public function show(Programa $programa)
    {
        return view('public.programas.show');
    }
}
