@if (isset($venda->id))
<form method="post" action="{{ route('venda.update', ['venda' => $venda->id])}}">
   @csrf
   @method('PUT')
@else
<form method="post" action="{{ route('venda.store')}}">
   @csrf
@endif 
     
<select class="form-control" name="cliente_id">
   <option>Selecione um Cliente</option>
      @foreach ($clientes as $cliente )
     <option value="{{ $cliente->id}}" {{  $cliente->cliente_id ?? old('cliente') == $cliente->id ? 'selected' : ''}}>{{ $cliente->nome }}</option>
     @endforeach
</select>
  {{$errors->has('cliente_id') ? $errors->first('cliente_id') : ''}}
  

 <br>
  <select class="form-control" name="produto_id" onchange="javascript:mostraAlerta(this);" >
   <option>Selecione um Produto</option>
      @foreach ($produtos as $produto )
     <option value="{{ $produto->id}}" {{  $produto->produto ?? old('produto') == $produto->id ? 'selected' : ''}}>{{ $produto->nome }}</option>
     @endforeach
</select>
  {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}

  <br>
  
         <div class="form-group col-md-3">
           <label>Quantidade</label>
           <input type="text" name="quantidade" class="form-control" id="quantidade" placeholder="0" nfocus="calcular()/">
         </div>

         <div class="form-group col-md-3">
           <label>Valor</label>
           <input type="text" name="valor" class="form-control" id="valor" placeholder="0" onblur="calcular() ">
             
         </div>
         
         <div class="form-group col-md-3">
          <label>Entrada</label>
          <input type="text" name="entrada" class="form-control" id="entrada" placeholder="0" onblur="calcular()">
        </div>
         <div class="form-group col-md-3">
           <label for="total">Total R$</label>
           <input type="text" name="tot" class="form-control" id="total" placeholder="0,00">
         </div>
        
        <div class="tipos">
          <input type="checkbox" name="tipo" class="form-check-input" id="exampleCheck"  onclick="mostra_proprio(this)" value="avista" checked>
          <label class="form-check-label">Àvista</label>

          <input type="checkbox" name="tipo" class="form-check-input" id="exampleCheck1" onclick="mostra_proprio(this)" value="parcelado">
          <label class="form-check-label">Parcelado</label>                                <!--public/js/calculos.js-->

          <!--<input type="checkbox" name="tipo" class="form-check-input" id="exampleCheck2" onclick="mostra_proprio(this)" value="entrada">
          <label class="form-check-label">Entrada</label>-->
          
       
        <!--<label id="entrada"  style="display: none">
        <input type="text" name="entrada" id="entrada" maxlength="150" size="45" placeholder="Entrada">
        </label>-->
      
        <label id="parcelado"style="display: none">
          <input type="number" name="parcelas" id="parcelado" maxlength="100" size="45" value="1">
          </label>
        </div>
            <br>
           
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
</form>

<script>

function mostraAlerta(elemento)
    {
       // window.alert(elemento.value);
       var teste = elemento.value;
      
       document.getElementById('teste').value = (teste);
    }

</script>
  
  
 

