<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';
    protected $fillable = ['nomealuno','sexo','serieano','datanascimento', 'naturalidade', 'uf', 'quantdirmao','cor','endereço','numero','cep','bairro','nomedopai','contatodopai','nomedamae','contatodamae','numRG','orgaoexpedidor','dataexpedicao','cpf','dataMatricula','alunoBolsaFamlia'];
}
