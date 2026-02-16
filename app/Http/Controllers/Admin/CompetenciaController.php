<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competencia;
use App\Http\Requests\StoreCompetenciaRequest;
use App\Http\Requests\UpdateCompetenciaRequest;

class CompetenciaController extends Controller
{
    public function index() { return view('admin.competencias.index'); }
    public function show(Competencia $competencia) { return view('admin.competencias.show'); }
    public function create() { return view('admin.competencias.create'); }
    public function store(StoreCompetenciaRequest $request) { return view('admin.competencias.index'); }
    public function edit(Competencia $competencia) { return view('admin.competencias.edit'); }
    public function update(UpdateCompetenciaRequest $request, Competencia $competencia) { return view('admin.competencias.index'); }
    public function destroy(Competencia $competencia) { return view('admin.competencias.index'); }
}
