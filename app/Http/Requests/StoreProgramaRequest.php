<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgramaRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('programa.create');
    }

    public function rules()
    {
        return [
            // TODO: Agregar reglas de validación reales según los campos de Programa
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|unique:programas,codigo',
            // ...otros campos...
        ];
    }
}
