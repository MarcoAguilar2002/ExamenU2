<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'nombre' =>'required',
            'curso' =>'required',
            'nota1' =>'required',
            'nota2' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Se necesita un nombre',
            'curso.required' => 'Se necesita un curso',
            'nota1.required' => 'Se necesita la primera nota',
            'nota2.required' => 'Se necesita la segunda nota',

        ];
    }
}
