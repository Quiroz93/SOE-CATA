<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProgramaRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('programa.update');
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|max:50|unique:programas,codigo,' . $this->route('programa'),
            // ...otros campos...
            'redes_ids' => 'required|array',
            'redes_ids.*' => 'exists:red_formacion,id',
        ];
    }
}
