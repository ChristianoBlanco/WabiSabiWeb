<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conteudo extends Model
{
     //lista branca de array onde contém as colunas da tabela
    //que podem ser preenchidos
    protected $fillable = [
        'titulo','texto','created_at','updated_at'
    ];
}
