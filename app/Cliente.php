<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

  protected $fillable = ['nome','rua','numero','bairro','cidade','telefone','rg','cpf'];


  public function vendaCliente(){

    return $this->hasMany('App\Vendas'); //indicando a coluna de modo explicito, fk, primary ky
}

 



}
