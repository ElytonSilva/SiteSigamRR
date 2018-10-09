<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PreMatriculaRequest extends FormRequest
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
            'nomemae.required'=>'Informe o Nome da Mãe',
            'nomepai.required'=>'Informe o Nome do Pai',
            'nomealuno.required'=>'Informe o Nome do Aluno(a)',
            'contatomae.required'=>'Informe o Telefone da Mãe',
            'contatopai.required'=>'Informe o Telefone da Pai',
            'cpfmae.required'=>'Informe o CPF da Mãe',
            'cpfpai.required'=>'Informe  o CPF da Pai',
            'senha.required'=>'Gere a Senha Novamento em Caso de Erro',



        ];
    }


    public function rules()
    {
        return [
            'nomemae' => 'required|string|max:255',
            'nomepai' => 'required|string|max:255',
            'nomealuno' => 'required|string|max:255',
            'contatomae' => 'required',
            'contatopai' => 'required',
            'cpfmae' => 'sometimes|required|cpf',
            'cpfpai' => 'sometimes|required|cpf',
            'senha' => 'sometimes|required|unique:prematricula',
        ];
    }
}
