<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RenovacaoRequest extends FormRequest
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
    public function messages(){

        return [
            'nomerespo.required'=>'Informe o Nome do Responsável do Aluno',
            'nomealuno.required'=>'Informe o Nome do Aluno',
        
        ];
    }


    public function rules()
    {
        return [
            'nomerespo.*' => 'required|string|max:255', 
			'nomealuno.*' => 'required|string|max:255',
           
        ];
    }
}
