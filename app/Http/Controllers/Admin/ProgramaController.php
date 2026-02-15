<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Programa::class, 'programa');
    }

    public function index()
    {
        // ...
    }
    public function show(Programa $programa)
    {
        // ...
    }
    public function create()
    {
        // ...
    }
    public function store(Request $request)
    {
        // ...
    }
    public function edit(Programa $programa)
    {
        // ...
    }
    public function update(Request $request, Programa $programa)
    {
        // ...
    }
    public function destroy(Programa $programa)
    {
        // ...
    }
}
