<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }   

    public function rules()
    {
        if($this->isMethod('post')){
            return[
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'age' => 'integer',
                'phone' => 'required|integer',
                'cpf' => 'required|integer|cpf'
                ];
            }
            if($this->isMethod('put')){
                    return[
                        //mensagens personalizadas aqui
                    ];
            }


    }
    public function messages(){
        return[
            'name.alpha' => 'O nome deve consistir apenas de caracteres alfabéticos.',
            'email.email'=> 'Insira um email válido',
            'email.unique' => 'Este email ja existe'
        ];
    }

}
