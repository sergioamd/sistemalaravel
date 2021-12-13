<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Cliente;
use App\Vendas;


use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.relatorio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $venda = Vendas::where('status', 'pago')->get();


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
        return view('app.relatorio.teste', ['request' => $request->all() ,'venda' => $venda]);
    }
    
    
    /**
     * trazer todos os clientes do banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function todosClientes(Request $request){
          
 
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
