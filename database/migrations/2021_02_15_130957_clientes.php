<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('rua', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->integer('bairro_id')->unsigned(); //chave estrangeira
            $table->string('cidade', 50)->nullable();
            $table->string('telefone', 50)->nullable();
            $table->string('rg', 15)->nullable();
            $table->string('cpf', 15)->nullable();
            $table->timestamps();

             //constraint
             $table->foreign('bairro_id')->references('id')->on('bairros');//chave estrangeira

        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
