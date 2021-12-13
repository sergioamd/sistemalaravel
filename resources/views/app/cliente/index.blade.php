@extends('app.layouts.basico')

@section('titulo', 'Cliente')
     
@section('conteudo')

<h3>Tabela de clientes</h3>

<div class="menu">
    <ul>
        <a href="{{ route('cliente.create')}}"><button class="btn btn-success">Novo</button></a>
        
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
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th colspan="3">Ação</th>
                </tr>
            </thead>

            <tbody>
             @foreach ($clientes as $cliente )
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->rua}}, {{$cliente->numero  }}</td>
                    <td>{{ $cliente->bairro }}</td>
                    <td><a href="{{ route('cliente.show', ['cliente' => $cliente->id, 'bairro' => $cliente->bairro_id ])}}"> <i class="fa fa-laptop" style="color:blue" title="Visualizar Cliente"></i></a></td>
                    <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id, 'bairro' => $cliente->bairro_id])}}"> <i class="fa fa-list-alt" style="color:green" title="Alterar Cliente"></i></a></td>
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