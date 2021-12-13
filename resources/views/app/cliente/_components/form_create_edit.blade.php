@if (isset($cliente->id))
<form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id])}}">
   @csrf
   @method('PUT')
@else
<form method="post" action="{{ route('cliente.store')}}">
   @csrf
@endif 
 
   <span>Nome:</span>
      <input type="text" name="nome" value="{{ $cliente->nome ?? old('nome')}}" placeholder="Nome" class="form-control">
      {{$errors->has('nome') ? $errors->first('nome') : ''}}
      <br>
   <span>Telefone:</span>   
      <input type="text" name="telefone" value="{{ $cliente->telefone ?? old('telefone')}}" placeholder="telefone" class="form-control">
      {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
      <br>
   <span>Rua:</span>   
      <input type="text" name="rua" value="{{ $cliente->rua ?? old('rua')}}" placeholder="Endereço" class="form-control">
      {{$errors->has('rua') ? $errors->first('rua') : ''}}
      <br>
   <span>Numero:</span>   
      <input type="text" name="numero" value="{{ $cliente->numero ?? old('numero')}}" placeholder="numero" class="form-control">
      {{$errors->has('numero') ? $errors->first('numero') : ''}}
      <br>
   <span>Bairro:</span>   
      <input type="text" name="bairro" value="{{ $cliente->bairro ?? old('bairro')}}" placeholder="bairro" class="form-control">
      {{$errors->has('bairro') ? $errors->first('bairro') : ''}}
      <br>
   <span>Cidade:</span>   
      <input type="text" name="cidade" value="{{ $cliente->cidade ?? old('cidade')}}" placeholder="cidade" class="form-control">
      {{$errors->has('cidade') ? $errors->first('cidade') : ''}}
      <br>
   <span>RG:</span>   
      <input type="text" name="rg" value="{{ $cliente->rg ?? old('rg')}}" placeholder="rg" class="form-control">
      {{$errors->has('rg') ? $errors->first('rg') : ''}}
       <br>
   <span>CPF:</span>    
      <input type="text" name="cpf" value="{{ $cliente->cpf ?? old('cpf')}}" placeholder="cpf" class="form-control">
      {{$errors->has('cpf') ? $errors->first('cpf') : ''}}

    

  <br>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

