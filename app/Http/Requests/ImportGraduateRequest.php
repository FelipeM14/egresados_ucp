<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportGraduateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|file|mimes:xlsx|max:700'
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'El archivo es requerido',
            'file.mimes' => 'Debe subir un archivo de excel 2007 o superior',
            'file.max' => 'El archivo debe tener menos de 700 KB',
        ];
    }
}
