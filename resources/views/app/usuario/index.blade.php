@extends('app.layouts.basico')

@section('titulo', 'Uauários')
     
@section('conteudo')

<h3>Cadastro Usuários</h3>

<div style="width: 50%; margin-left: auto; margin-right: auto;">
   
<form method="post" action="{{ route('usuario.store')}}">
    @csrf

   <input type="text" name="nome" value="" placeholder="Nome" class="form-control">
   <br>
   <input type="text" name="email" value="" placeholder="E-mail" class="form-control">
   <br>
   <input type="text" name="cpf" value="" placeholder="CPF" class="form-control">
   <br>
   <input type="password" name="password" value="" placeholder="Senha" class="form-control">
  

   <br>
   <button type="submit" class="btn btn-success">Cadastrar</button>
 </form>

</div>
@endsection