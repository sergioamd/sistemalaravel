@extends('app.layouts.basico')

@section('titulo', 'cobrança')
     
@section('conteudo')

<h3>Relatório Clientes Recebidos</h3>


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
                    <th>Valor</th>
                    <th>Parcela</th>
                    <th>Valor Parcela</th>
                    <th>Dt Pago</th>
                    
                    

                </tr>
            </thead>

            <tbody>
             @foreach ($venda as $venda )
                <tr>
                    
                    <td>{{ $venda->nome ?? ''}}</td>
                    <td>{{ $venda->telefone ?? ''}}</td>
                    <td>{{ $venda->rua ?? ''}}, {{$venda->numero ?? '' }} - {{$venda->bairro ?? '' }}</td>
                    <td>{{ $venda->total ?? ''}}</td>
                    <td>{{ $venda->parcelas ?? ''}}</td>
                    <td>{{ $venda->valorParcela ?? ''}} </td>
                    <td>{{ $venda->data ?? ''}}</td>
                    
                                         
                    
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