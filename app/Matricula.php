<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';
    protected $fillable = ['user_id','nomealuno','sexo','serieano','datanascimento', 'naturalidade', 'uf', 'quantdirmao','cor','endereço','numero','cep','bairro','nomedopai','contatodopai','nomedamae','contatodamae','numRG','orgaoexpedidor','dataexpedicao','cpf','dataMatricula','alunoBolsaFamlia'];

		
	

	public function user() {
        return $this->belongsTo('App\User');
    }	
}
