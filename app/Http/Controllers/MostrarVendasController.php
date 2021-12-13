<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendas;
use App\Cliente;
use App\Produto;

class MostrarVendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
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
                   $venda[$key]['numero'] = $vendaCliente->numero;
                   $venda[$key]['bairro'] = $vendaCliente->bairro;
               }

            // echo '<hr>';

        }
        return view('app.mostrar.index', ['request' => $request->all() ,'venda' => $venda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(vendas $venda)
    {
       // return view('app.venda.show', ['venda' => $venda]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(vendas $venda)
    {
        $clientes = Cliente::all();
        $produtos = Produto::all();
       
        return view('app.venda.edit', ['venda' => $venda, 'clientes' => $clientes, 'produtos' => $produtos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendas $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
