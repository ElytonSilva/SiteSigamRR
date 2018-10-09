<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prematricula', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomemae');
            $table->string('nomepai');
            $table->string('nomealuno');
            $table->string('contatomae');
            $table->string('contatopai');
            $table->string('cpfmae');
            $table->string('cpfpai');
            $table->string('senha')->unique();
            $table->timestamps();
        });

        Schema::create('prematricula_users', function (Blueprint $table) {
            $table->integer('prematricula_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prematricula');
    }
}
