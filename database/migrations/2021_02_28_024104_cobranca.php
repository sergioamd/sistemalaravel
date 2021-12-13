<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cobranca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cobranca', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('venda_id')->unsigned(); //chave estrangeira
            $table->string('status');
            
            
           
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
