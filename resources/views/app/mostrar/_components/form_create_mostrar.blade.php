@if (isset($venda->id))
<form method="post" action="{{ route('mostrar.update', ['venda' => $venda->id])}}">
   @csrf
   @method('PUT')
@else
<form method="post" action="{{ route('mostrar.store')}}">
   @csrf
@endif 
  
          <span>Nome:</span>
      <input type="text" name="nome" value="{{ $venda->nome ?? old('nome')}}" placeholder="Nome" class="form-control">
      {{$errors->has('nome') ? $errors->first('nome') : ''}}
      <br>
   
  <br>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

