<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//model item que mapeia a tabela produtos e tem um item detalhe, que mapeia a tabela produtoDetalhe
//e o relacionamento em produtosDetalhe, a fk é a produto_id, esta encaminhando o id da tabela produtos
class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao' , 'peso', 'unidade_id','fornecedor_id'];

    public function itemDetalhe(){
        //hasOne = tem 1
        return $this->hasOne('App\ItemDetalhe', 'produto_id','id');
    }

    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }

}
