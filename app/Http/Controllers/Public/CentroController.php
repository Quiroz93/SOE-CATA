<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Centro;

class CentroController extends Controller
{
    public function index()
    {
        return view('public.centros.index');
    }
    public function show(Centro $centro)
    {
        return view('public.centros.show');
    }
}
