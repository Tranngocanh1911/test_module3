<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'phonenumber' => 'required|min:10|numeric',
            'email'=> 'required|email|unique:email',
            'address'=> 'required|min:6',
            'manager'=> 'required|min:3'
        ];
    }
}