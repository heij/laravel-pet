<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'cep' => 'required|string',
            'number' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validations
     * 
     * @return array
     */

    public function messages()
    {
        return [
            'name' => 'O campo name é obrigatório',
            'descricao' => 'O campo descricao é obrigatório',
            'password' => 'O campo password é obrigatório',
            'cep' => 'O campo cep é obrigatório',
            'number' => 'O campo number é obrigatório'
        ];
    }
}
