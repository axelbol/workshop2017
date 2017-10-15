<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePersonalAccount extends FormRequest
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
            'first_name' => 'required|max:15|min:2',
            'last_name' => 'required|max:15|min:2',
            'email' => 'required|max:30|min:2|email|unique:personal_accounts,email',
            'password' => 'required|max:30|min:8|alpha_num|confirmed',
            'password_confirmation' => 'required|max:30|min:8|alpha_num'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Se requiere de un nombre',
            'last_name.required'  => 'Se requiere de un apellido',
        ];
    }

}
