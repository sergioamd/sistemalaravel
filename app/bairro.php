<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bairro extends Model
{
    protected $table = 'bairros';

    protected $fillable = ['nome'];
  
   
    public function bairroCliente(){
  
      return $this->hasMany('App\Cliente'); //indicando a coluna de modo explicito, fk, primary ky
    }
   
}
