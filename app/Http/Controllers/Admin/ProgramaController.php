<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use App\Http\Requests\StoreProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;

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
    public function store(StoreProgramaRequest $request)
    {
        // ...
    }
    public function edit(Programa $programa)
    {
        // ...
    }
    public function update(UpdateProgramaRequest $request, Programa $programa)
    {
        // ...
    }
    public function destroy(Programa $programa)
    {
        // ...
    }
}
