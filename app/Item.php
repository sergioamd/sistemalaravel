<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor-id'];
   

    /*produto tem um produto detalhe
    * que cada produto tem um registro relacionado com produtoDetalhes
    */
    public function itemDetalhe(){

        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id'); //indicando a coluna de modo explicito, fk, primary ky
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
