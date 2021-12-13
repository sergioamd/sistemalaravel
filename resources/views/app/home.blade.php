@extends('app.layouts.basico')

@section('titulo', 'Vendas')
     
@section('conteudo')

<h3>Tabela de Vendas</h3>

<div class="menu">
    <ul>
        <a href="{{ route('produto.create')}}"><button class="btn btn-success">Novo</button></a>
        
    </ul>

</div>

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
    <div class="col-sm-12">
    <section class="panel">
  
    <div class="panel-body">
    <div class="adv-table">
    <table  class="display table table-bordered table-striped" id="dynamic-table">
        
            <thead>
                <tr>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
             @foreach ($produtos as $produto )
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td><a href="{{ route('produto.show', ['produto' => $produto->id ])}}"> Visualizar</a></td>
                    <td>
                        <form id="form_{{$produto->id}}" method="post" action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                            @method('DELETE')
                            @csrf
                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit()"> Excluir</a>
                     </form>
                     </td>
                    <td><a href="{{ route('produto.edit', ['produto' => $produto->id ])}}"> Editar</a></td>
                </tr>
             @endforeach
            </tbody>
        
    </table>
    </div>
    </div>
    </section>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    
    </div>
    </div>
    </div>
    <!--body wrapper end-->


@endsection