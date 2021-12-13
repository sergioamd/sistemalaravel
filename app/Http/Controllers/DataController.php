<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendas;

class DataController extends Controller
{
    public function index(Request $request)
    {
        return view('app.data.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
     
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     
      
    }

    

    /**
     * edita a tabela de vendas trazendo os clientes a venda e os produtos
     *
     * @param  int  $vendas
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
   
    }

    /**
     * aqui atualiza o status de pago e pega a data atual e atualiza o campo data 
     *ao clicar no botão pago
    *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendas $data)    {
          
       //$teste = $request->get('novadata');
            
        $data->data = $request->get('novadata');
        $data->update($request->all());
          //dd($venda->data);
        return redirect()->route('mostrar.index', ['venda' => $data->id]);
        
    }
    

    /**
     * Remove a venda mas naão esta sendo utilizado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
    }
}
