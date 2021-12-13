<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\bairro;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::all();
        $bairro = bairro::all();
        return view('app.cliente.index', ['request' => $request->all() ,'clientes' => $clientes, 'bairro' => $bairro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bairro = bairro::all();
           
        return view('app.cliente.create',['bairro' => $bairro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome'  => 'required|min:3|max:40',       
         ];

         $feedback = [
            'required'    => 'O campo :attribute deve ser preenchido',
            'nome.min'    => 'O campo nome deve ter no minimo 3 caracteres',
            'nome.max'    => 'O campo nome deve ter no maximo 40 caracteres' 
         ];
       
         $request->validate($regras, $feedback);

         $cliente = new Cliente();
         $cliente->nome = $request->get('nome');
         $cliente->rua = $request->get('rua');
         $cliente->numero = $request->get('numero');
         $cliente->bairro = $request->get('bairro');
         $cliente->cidade = $request->get('cidade');
         $cliente->telefone = $request->get('telefone');
         $cliente->rg = $request->get('rg');
         $cliente->cpf = $request->get('cpf');

         $cliente->save();

         return redirect()->route('cliente.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente, bairro $bairro)
    {
        
        return view('app.cliente.show', ['cliente' => $cliente,'bairro' => $bairro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
       
        //$cliente = Cliente::all();
         return view('app.cliente.edit', ['cliente' => $cliente]);
        //return view('app.produto.create', ['produto' => $produto, 'unidades' => $unidades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $regras = [
            'nome'  => 'required|min:3|max:40',       
         ];

         $feedback = [
            'required'    => 'O campo :attribute deve ser preenchido',
            'nome.min'    => 'O campo nome deve ter no minimo 3 caracteres',
            'nome.max'    => 'O campo nome deve ter no maximo 40 caracteres' 
         ];

         $request->validate($regras, $feedback);
         //recuperando os dados e atualizando
        $cliente->update($request->all());
        return redirect()->route('cliente.index', ['cliente' => $cliente->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
