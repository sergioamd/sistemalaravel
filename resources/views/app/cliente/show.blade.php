@extends('app.layouts.basico')

@section('titulo', 'cliente')
     
@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <p>Visualizar Clientes</p>
    </div>

    <div class="menu">
        <ul>
            <a href="{{ route('cliente.index')}}"><button class="btn btn-info">Voltar</button></a>
            
        </ul>

    </div>

    <div class="informacao-pagina">
        
        <div style="width: 30%; margin-left: auto; margin-right: auto;">

                
            <table class="table"  style="text-align: left" width="80%">
               
                    <tr>
                        <td>ID:</td>
                        <td>{{ $cliente->id }}</td>                       
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $cliente->nome }}</td>                       
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>{{ $cliente->telefone }}</td>                       
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td>{{ $cliente->rua }},{{$cliente->numero}}</td>                       
                    </tr>
                    <tr>
                        <td>Bairro:</td>
                        <td>{{ $cliente->bairro }}</td>                       
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td>{{ $cliente->cidade }}</td>                       
                    </tr>
                    <tr>
                        <td>RG:</td>
                        <td>{{ $cliente->rg }}</td>                       
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td>{{ $cliente->cpf }}</td>                       
                    </tr>
                    
            </table>
        </div>
    </div> 

</div>

@endsection