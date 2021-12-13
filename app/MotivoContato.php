<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoContato extends Model
{
    protected $table = 'motivo_contatos'; //dizer que ira gravar os dados no banco nesta tabela
    
    protected $fillable = ['motivo_contato'];
}
