<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDesafios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desafios', function(Blueprint $table){
            $table->increments('id');
            $table->integer('numero_casas');
            $table->string('token');
            $table->string('cifrado');
            $table->string('decifrado');
            $table->string('resumo_criptografico');
           //passa o tipo de dado e o nome da coluna, pode passar tbm o tamanho

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('desafios');
    }
}
