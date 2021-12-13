<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //duas formas para inserir registros automaticamente no banco

        //instanciando o objeto
        $fornecedor = new fornecedor();//criado um objeto fornecedor
         $fornecedor->nome = 'Fornecedor 100';
         $fornecedor->site = 'fornecedor100.com.br'; 
         $fornecedor->uf = 'SP'; 
         $fornecedor->email = 'contato@fornecedor100.com.br';  
         $fornecedor->save();

         //utilizando o metodo create
         Fornecedor::create([
            'nome'=> 'Fornecedor 200',
            'site'=> 'fornecedor200.com.br',
            'uf'=> 'RS',
            'email'=> 'contato@ornecedor200.com.br',

         ]);

         

    }
}
