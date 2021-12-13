@extends('app.layouts.basico')

@section('titulo', 'cliente')
     
@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">

        <h3>Adicionar Cliente</h3>
       
        
    </div>

    <div class="menu">
        <ul>
            <a href="{{ route('cliente.index')}}"><button class="btn btn-info">Voltar</button></a>
        </ul>

    </div>

    <div class="informacao-pagina">
        
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            @component('app.cliente._components.form_create_edit')
                
            @endcomponent
        </div>
    </div> 

</div>

@endsection