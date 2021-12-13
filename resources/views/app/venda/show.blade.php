@extends('app.layouts.basico')

@section('titulo', 'Vendas')
     
@section('conteudo')

<div class="conteudo-pagina">

    <div class="titulo-pagina-2">
        <p>Visualizar Vendas</p>
    </div>

    <div class="menu">
        <ul>
            <a href="{{ route('mostrar.index')}}"><button class="btn btn-info">Voltar</button></a>
            
        </ul>

    </div>

    <div class="informacao-pagina">
        
        <div style="width: 30%; margin-left: auto; margin-right: auto;">

                
            <table class="table"  style="text-align: left" width="80%">
                 <h3>Dados Cliente</h3>
                    <tr>
                        <td>ID:</td>
                        <td>{{ $venda->id }}</td>                       
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td>{{ $vendaCliente->nome }}</td>                       
                    </tr>
                    <tr>
                        <td>Endereço:</td>
                        <td>{{ $vendaCliente->rua }}, {{ $vendaCliente->numero }} </td>                       
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>{{ $vendaCliente->telefone }}</td>                       
                    </tr>
                    <tr>
                        <td>Bairro:</td>
                        <td>{{ $vendaCliente->bairro }}</td>                       
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td>{{ $vendaCliente->cidade }}</td>                       
                    </tr>
                    <tr>
                        <td>RG:</td>
                        <td>{{ $vendaCliente->rg }}</td>                       
                    </tr>
                    <tr>
                        <td>CPF:</td>
                        <td>{{ $vendaCliente->cpf }}</td>                       
                    </tr>
            </table>
            <hr>
            <table class="table"  style="text-align: left" width="90%">
                <h3>Dados Venda</h3>
                   <tr>
                       <td>Data Compra:</td>
                       <td>{{ $venda->created_at }}</td>                       
                   </tr>
                   <tr>
                    <td>Produto:</td>
                    <td>{{ $vendaProduto->nome}}</td>                       
                </tr>
                <tr>
                    <td>Valor Produto R$:</td>
                    <td>{{ $venda->valor }}</td>                       
                </tr> 
           </table>
           <table class="table"  style="text-align: left" width="0%">
            <h3>Dados Complementares</h3>
            <tr>
                <td>Entrada:</td>
                <td>{{ $venda->entrada }}</td>                       
            </tr>
            <tr>
                <td>Parcela:</td>
                <td>{{ $venda->parcelas }}</td>                       
            </tr>
            <tr>
                <td>Valor Parcela R$:</td>
                <td>{{ $venda->valorParcela }}</td>                       
            </tr>
            <tr>
                <td>Valor Total (valor - entrada):</td>
                <td>{{ $venda->total }}</td>                       
            </tr>  
            <tr>
                <td>Data Pagamento:</td>
                <td>{{ $venda->data }}</td>                       
            </tr> 
            <tr>
                <!--<td><a href="{{ route('data.index')}}"><button class="btn btn-info">Trocar Data</button></a></td> --> 
                <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Trocar Data</button></td>                      
            </tr>   
       </table>
        </div>
    </div> 

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trocar Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('data.update',  ['data' => $venda->id])}}">
            @csrf
            @method('PUT')

        <p>Data Nova:</p>
        <input id="novadata" name="novadata" type="date">
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Atualizar</button>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>
  <!--<td><a href="{{ route('data.index')}}"><button class="btn btn-info">Trocar Data</button></a></td> --> 
@endsection
