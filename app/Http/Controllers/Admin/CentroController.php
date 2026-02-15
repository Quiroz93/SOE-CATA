<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    public function index() { return view('admin.centros.index'); }
    public function show(Centro $centro) { return view('admin.centros.show'); }
    public function create() { return view('admin.centros.create'); }
    public function store(Request $request) { return view('admin.centros.index'); }
    public function edit(Centro $centro) { return view('admin.centros.edit'); }
    public function update(Request $request, Centro $centro) { return view('admin.centros.index'); }
    public function destroy(Centro $centro) { return view('admin.centros.index'); }
}
