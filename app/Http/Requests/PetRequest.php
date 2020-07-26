<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'descricao' => 'required|string',
            'age' => 'required',
            'user_id' => 'required|numeric|exists:users,id',
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
            'age' => 'O campo age é obrigatório',
            'user_id' => 'O campo user_id é obrigatório'
        ];
    }
}
