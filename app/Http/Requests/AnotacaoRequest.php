<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnotacaoRequest extends FormRequest
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

    public function messages()
    {
        return [
            'lembrete.required'=>'Informe o Lembre que Deseja Cadastrar',
            'dataInicio.required'=>'Informe a Data de Inicio da Matricula',
            'horaInicio.required'=>'Informe a Data de Horário da Matricula',
           
        ];
    }
    
    
    public function rules()
    {
        return [
            'lembrete' => 'required|string|max:500',
            'dataInicio'  => 'required',
            'horaInicio'  => 'required',
            'horaTermino'  => 'required',
            
        ];
    }
}
