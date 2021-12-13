<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendas;
use App\Cliente;
use App\Produto;
use App\Tipo;

class HomeController extends Controller
{
    public function index(Request $request){
        

       /* $venda = Vendas::all();

        foreach($venda as $key => $vende){
          // print_r($vende->getAttributes());
          // echo '<br><br>';

               $vendaCliente = Cliente::where('id', $vende->Cliente_id)->first();

               if(isset($vendaCliente)){
                   //print_r($vendaCliente->getAttributes());

                   $venda[$key]['nome'] = $vendaCliente->nome;
                   $venda[$key]['telefone'] = $vendaCliente->telefone;
                   $venda[$key]['rua'] = $vendaCliente->rua;
               }

            // echo '<hr>';

        }
        return view('app.mostrar.index', ['request' => $request->all() ,'venda' => $venda]);*/
        $venda = Vendas::where('status', 'devendo')->get();


        foreach($venda as $key => $vende){
          // print_r($vende->getAttributes());
          // echo '<br><br>';

               $vendaCliente = Cliente::where('id', $vende->Cliente_id)->first();

               if(isset($vendaCliente)){
                   //print_r($vendaCliente->getAttributes());

                   $venda[$key]['nome'] = $vendaCliente->nome;
                   $venda[$key]['telefone'] = $vendaCliente->telefone;
                   $venda[$key]['rua'] = $vendaCliente->rua;
               }

            // echo '<hr>';

        }
        return view('app.mostrar.index', ['request' => $request->all() ,'venda' => $venda]);
    }
}
