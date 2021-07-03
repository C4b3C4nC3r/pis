<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreX extends FormRequest
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
            'name'=>'required|max:25',
            'descripcion'=>'required|min:25',
            'categoria'=>'required|max:15'
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Nombre X'
        ];
    }
    public function messages()
    {
        return [
            'descripcion.required'=>'X mensaje X : Debe de ingresar una descripcion'
        ];
    }
}
