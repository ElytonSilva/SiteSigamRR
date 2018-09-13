<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomealuno');
            $table->string('sexo');
            $table->string('serieano');
            $table->date('datanascimento');
            $table->string('naturalidade');
            $table->string('uf');
            $table->string('quantdirmao');
            $table->string('cor');
            $table->string('endereço');
            $table->string('numero');
            $table->string('cep');
            $table->string('bairro');
            $table->string('nomedopai');
            $table->string('contatodopai');
            $table->string('nomedamae');
            $table->string('contatodamae');
            $table->string('numRG');
            $table->string('orgaoexpedidor');
            $table->date('dataexpedicao');
            $table->string('cpf')->unique();;
            $table->date('dataMatricula');
            $table->string('alunoBolsaFamlia');
            $table->timestamps();
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
