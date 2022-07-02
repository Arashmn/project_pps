<?php

namespace App\Http\Requests\Auth;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'mobile'=>'required|unique:users|numeric|digits:11|regex:/(09)[0-9]{9}/',
            'code_meli'=>'required|unique:users|numeric|digits:10',
            'password'=>'required|confirmed',
            'rules'=>['required',Rule::in(['accept'])],
        ];
    }
}

//
//