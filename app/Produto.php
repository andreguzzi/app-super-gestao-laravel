<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao' , 'peso', 'unidade_id'];

    public function ProdutoDetalhe(){
        //hasOne = tem 1
        return $this->hasOne('App\ProdutoDetalhe');

        //this se refere ao produto
        // Produto tem 1 produtoDetalhe
        //1 registro relacionado em produto_detalhes (fk) -> produto_id
        //produtos (pk) -> id
    }
}
