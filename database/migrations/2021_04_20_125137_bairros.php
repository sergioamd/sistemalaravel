<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bairros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50); 
           
            
            
           
            //constraint
            $table->foreign('venda_id')->references('id')->on('vendas');//chave estrangeira
            
            //$table->unique('cliente_id'); //produto e unico relacionamento um pra um


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
        Schema::dropIfExists('cobranca');
    }
}
