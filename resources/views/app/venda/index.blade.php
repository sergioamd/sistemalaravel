@extends('app.layouts.basico')

@section('titulo', 'Vendas')
     
@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">

        <h3>Adicionar Vendas</h3>
       
        
    </div> 

    <div class="menu">
        <ul>
            <a href="{{ route('venda.index')}}"><button class="btn btn-info">Voltar</button></a>
        </ul>

    </div>

    <div class="informacao-pagina">
        
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            @component('app.venda._components.form_create_edit', ['clientes' => $clientes, 'produtos' => $produtos,])
           
                
            @endcomponent
        </div>
    </div> 

</div>

@endsection