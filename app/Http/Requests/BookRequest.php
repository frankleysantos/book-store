<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'    => 'required|min:4',
            'isbn'    => 'integer',
            'value'   => 'numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Campo name é obrigatório!',
            'name.min'          => 'Campo name dever ter no minimo 4 caracteres!',
            'isbn.integer'      => 'Campo isbn deve ser inteiro!',
            'value.numeric'      => 'Campo value deve ser numerico!',
        ];
    }
}
