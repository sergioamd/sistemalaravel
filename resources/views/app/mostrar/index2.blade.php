@extends('app.layouts.basico')

@section('titulo', 'cobrança')
     
@section('conteudo')

<h3>Tabela de Cobrança</h3>

<div class="menu">
    <ul>
        <a href="{{ route('venda.create')}}"><button class="btn btn-success">Venda</button></a>
        
    </ul>

</div>

<!--body wrapper start-->
   
    <!-- main content start-->
   


        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <div class="panel-body">
                <div class="adv-table editable-table ">
                
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>telefone</th>
                    <th>Endereço</th>
                    <th>Bairro</th></th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Pgto</th>
                    <th>Resta</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Atualizar</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($venda as $venda )
                    <tr>
                        
                        <td>{{ $venda->nome ?? ''}}</td>
                        <td>{{ $venda->telefone ?? ''}}</td>
                        <td>{{ $venda->rua ?? ''}}, {{ $venda->numero ?? ''}}</td>
                        <td>{{ $venda->bairro ?? ''}}</td>
                        <td>{{ $venda->total ?? ''}}</td>
                        <td>{{ $venda->data ?? ''}}</td>
                        <td>{{ $venda->pgto?? ''}} </td>
                        <td>{{ $venda->resta ?? ''}}</td>
                        <td><a class="edit" href="javascript:;">Edit</a></td>
                        
                       <!--editable-table.js-->
                        <td><form id="form{{$venda->id}}"method="post" action="{{ route('venda.destroy', ['venda' => $venda->id])}}">
                                @method('DELETE')
                                @csrf
                                <a href="#" onclick="document.getElementById('form{{$venda->id}}').submit()"><button class="btn btn-success btn-sm" >Excluir</button></a>
                            </form>
                        </td>
                        <td>
                            <form id="form{{$venda->id}}"method="post" action="{{ route('venda.update', ['venda' => $venda->id])}}">
                                @method('PUT')
                                @csrf
                                <a href="#" onclick="document.getElementById('form{{$venda->id}}').submit()"><button class="btn btn-success btn-sm" >Atualizar</button></a>
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
        </div>
        <!--body wrapper end-->
  
    <!-- main content end-->
    <!--body wrapper end-->

 
  



@endsection

