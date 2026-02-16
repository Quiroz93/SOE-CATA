<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use App\Http\Requests\StoreCentroRequest;
use App\Http\Requests\UpdateCentroRequest;

class CentroController extends Controller
{
    public function index() { return view('admin.centros.index'); }
    public function show(Centro $centro) { return view('admin.centros.show'); }
    public function create() { return view('admin.centros.create'); }
    public function store(StoreCentroRequest $request) { return view('admin.centros.index'); }
    public function edit(Centro $centro) { return view('admin.centros.edit'); }
    public function update(UpdateCentroRequest $request, Centro $centro) { return view('admin.centros.index'); }
    public function destroy(Centro $centro) { return view('admin.centros.index'); }
}
