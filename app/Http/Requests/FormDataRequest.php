<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is Required.',
            'detail.required'  => 'The detail is Required.',
            'price.required'  => 'The price is Required.',
        ];
    }


    public function rules()
    {
        return [
            'name' => 'bail|required|max:255',
            'detail' => 'required|max:255',
            'price' => 'required|numeric',
        ];
    }
}
