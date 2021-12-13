<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Cliente_id')->unsigned(); //chave estrangeira
            $table->integer('produto_id')->unsigned(); //chave estrangeira
            $table->integer('quantidade');
            $table->decimal('valor', 8, 2);
            $table->decimal('total', 8, 2);
            $table->string('tipo', 50);
            $table->date('data')->nullable();
            //$table->integer('parcelas')->nullable();
            $table->decimal('entrada', 8, 2)->nullable();
            //$table->decimal('resta', 8, 2)->nullable();
            $table->string('status', 20);
            //$table->decimal('valorParcela', 8, 2)->nullable();
            //$table->string('status')->default('devendo');
            
           
            //constraint
            $table->foreign('produto_id')->references('id')->on('produtos');//chave estrangeira
            $table->foreign('cliente_id')->references('id')->on('clientes');//chave estrangeira
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
        Schema::dropIfExists('vendas');
    }
}
