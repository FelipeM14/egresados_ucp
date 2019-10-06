<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateColumnRequest extends FormRequest
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
            'title' => 'required|min:2|max:50',
            'category_id' => 'required',
            'order' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo título es requerido',
            'title.min' => 'El título debe tener más de 2 caracteres',
            'title.mix' => 'El título debe tener menos de 50 caracteres',
            'category_id.required' => 'Debe seleccionar una categoría',
            'order.required' => 'El campo prioridad es requerido',
        ];
    }

}
