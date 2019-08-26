<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
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
            'name' => 'required|min:4|max:20|unique:roles,name'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre debe tener más de 4 caracteres',
            'name.max' => 'El campo nombre debe tener menos de 20 caracteres',
            'name.unique' => 'Este nombre ya existe',
        ];
    }
}
