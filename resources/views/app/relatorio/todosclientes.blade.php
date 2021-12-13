@extends('app.layouts.basico')

@section('titulo', 'cobrança')
     
@section('conteudo')

<h3>Relatório Clientes</h3>


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
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>RG</th>
            <th>CPF</th>
            <th colspan="2">Ação</th>
        </tr>
    </thead>

    <tbody>
     @foreach ($clientes as $cliente )
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->rua}}, {{$cliente->numero  }}</td>
            <td>{{ $cliente->bairro}}</td>
            <td>{{ $cliente->cidade}}</td>
            <td>{{ $cliente->rg}}</td>
            <td>{{ $cliente->cpf}}</td>
            <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id ])}}"> <i class="fa fa-list-alt" style="color:green" title="Alterar Cliente"></i></a></td>
            <td>
                <form id="form_{{$cliente->id}}" method="post" action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}">
                    @method('DELETE')
                    @csrf
                <a href="#" onclick="document.getElementById('form_{{$cliente->id}}').submit()"> <i class="fa fa-trash-o" style="color:red" title="Excluir Cliente"></i></a>
             </form>
             </td>
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