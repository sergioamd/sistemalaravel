<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $table = 'vendas';

    protected $fillable = ['Cliente_id', 'produto_id', 'quantidade', 'valor', 'total', 'tipo', 'resta', 'status', 'entrada','pgto']; 


    //public function clienteVenda(){

       // return $this->belongsTo('App\Cliente'); //indicando a coluna de modo explicito, fk, primary ky
   // }
  
}

