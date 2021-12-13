@extends('app.layouts.basico')

@section('titulo', 'Cliente')
     
@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <p>Cliente - Editar</p>
    </div>

    <div class="menu">
        <ul>
            <a href="{{ route('cliente.index')}}"><button class="btn btn-info">Voltar</button></a>
            
        </ul>

    </div>

    <div class="informacao-pagina">
        
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            @component('app.cliente._components.form_create_edit', ['cliente' => $cliente])
                
            @endcomponent
        </div>
    </div> 

</div>

@endsection