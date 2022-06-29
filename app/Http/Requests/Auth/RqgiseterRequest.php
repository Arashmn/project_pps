<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RqgiseterRequest extends FormRequest
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
            'mobile'=>'required|unique:users|numeric|digits:value11|regex:/(09)[0-9]{9}',
            'code_meli'=>'required|unique:users',
            'password'=>'required|confirmed',
            'rules'=>['required',Rule::in(['1'])],
            'type'=>['required',Rule::in(['user','marketer','envoy','branch','center'])]
        ];
    }
}