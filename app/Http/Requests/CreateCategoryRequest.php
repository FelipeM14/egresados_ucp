<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest

//validadores para las categorias
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
            'name' => 'required|min:2|max:50|unique:categories,name',
            'color' => 'required',
            'color_text' => 'required',
            'order' => 'required|integer',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.unique' => 'Ya existe una categoría con ese nombre',
            'name.min' => 'El nombre debe tener más de 2 caracteres',
            'name.mix' => 'El nombre debe tener menos de 50 caracteres',
            'color.required' => 'El campo color de fondo es requerido',
            'color_text.required' => 'El campo color de texto es requerido',
            'order.required' => 'El campo prioridad de vista es requerido',
            'order.integer' => 'El campo prioridad debe ser numérico',
        ];
    }
}
