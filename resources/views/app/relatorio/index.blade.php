@extends('app.layouts.basico')

@section('titulo', 'Relatorio')
     
@section('conteudo')

<a  href="{{route('relatorio.create')}}"><h3><i class="fa fa-file-text-o" style="color:blue"></i> - Relatório Clientes Recebidos</h3></a>
<br>
<a  href="{{route('relatorio1.create')}}"><h3><i class="fa fa-sitemap" style="color:blue"></i> - Relatório Clientes</h3></a>

@endsection