<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'last_name' => 'required|min:2|max:150',
            'document_type' => 'required',
            'document_number' => 'required|min:2|max:20',
            'email' => 'required|min:10|max:150',
            'active' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre debe tener más de 2 caracteres',
            'name.max' => 'El campo nombre debe tener menos de 100 caracteres',

            'last_name.required' => 'El campo apellido es requerido',
            'last_name.min' => 'El campo apellido debe tener más de 4 caracteres',
            'last_name.max' => 'El campo apellido debe tener menos de 100 caracteres',

            'document_type.required' => 'Debe seleccionar un tipo de documento',

            'document_number.required' => 'El campo número de documento es requerido',
            'document_number.min' => 'El campo número de documento debe tener más de 2 caracteres',
            'document_number.max' => 'El campo número de documento debe tener menos de 20 caracteres',

            'email.required' => 'El campo correo electrónico es requerido',
            'email.min' => 'El campo correo electrónico debe tener más de 10 caracteres',
            'email.max' => 'El campo correo electrónico debe tener menos de 150 caracteres',

            'active.required' => 'Debe seleccionar un tipo estado',
        ];
    }

}
