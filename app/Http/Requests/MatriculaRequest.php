<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MatriculaRequest extends FormRequest
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
            'nomealuno.required'=>'Informe o Nome do Aluno',
            'sexo.required'=>'Selecione o Sexo',
            'serieano.required'=>'Informe a Série/Ano',
            'datanascimento.required'=>'Informe a Data de Nascimento',
            'naturalidade.required'=>'Informe a Naturalidade',
            'uf.required'=>'Informe o Estado',
            'quantdirmao.required'=>'Informe a Quantidade de Irmãos',
            'cor.required'=>'Selecione a Cor',
            'numero.required'=>'Informe Número da Casa',
            'cep.required'=>'Informe o Cep da Rua',
            'bairro.required'=>'Informe o Bairro',
            'nomedopai.required'=>'Informe o Nome do Pai',
            'contatodopai.required'=>'Informe o Número de Contato do Pai',
            'nomedamae.required'=>'Informe o Nome da Mãe',
            'contatodamae.required'=>'Informe o Número de Contato da Mãe',
            'numRG.required'=>'Informe o Número do RG do Pai ou Mãe',
            'orgaoexpedidor.required'=>'Informe o Orgão Expedidor',
            'dataexpedicao.required'=>'Informe a Data de Expedição do RG',
            'cpf.required'=>'Informe o Número do CPF do Pai ou Mãe',
            'dataMatricula.required'=>'Informe o Dia da Matricula',
            'alunoBolsaFamlia.required'=>'O Aluno é Cadastro no Bolsa Família? Selecione Abaixo',
            

        ];
    }
    public function rules()
    {
        return [
            'nomealuno' => 'required|string|max:255',
            'sexo'  => 'required|string',
            'serieano'  => 'required|string|max:20',
            'datanascimento'  => 'required',
            'naturalidade'  => 'required|string|max:100',
            'uf' => 'required|string|max:255',
            'quantdirmao' => 'required|numeric',
            'cor' => 'required|string|max:255',
            'endereço' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'cep' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'nomedopai' => 'required|string|max:255',
            'contatodopai' =>'required',
            'nomedamae' => 'required|string|max:255',
            'contatodamae' => 'required',
            'numRG' => 'required',
            'orgaoexpedidor' => 'required|string|max:255',
            'dataexpedicao' => 'required',
            'cpf' => 'sometimes|required|cpf|unique:matricula',
            'dataMatricula' => 'required',
            'alunoBolsaFamlia' => 'required|string|max:255',
        ];
    }
}
