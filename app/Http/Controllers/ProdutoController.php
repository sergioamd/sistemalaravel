<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::all();
        return view('app.produto.index', ['request' => $request->all() ,'produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.produto.create');
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

         $produto = new Produto();
         $produto->nome = $request->get('nome');
         $produto->valor = $request->get('valor');
         $produto->save();

         return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        return view('app.produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        return view('app.produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
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
        $produto->update($request->all());
        return redirect()->route('produto.index', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
