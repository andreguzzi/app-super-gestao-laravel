<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produto_detalhes';
    protected $fillable = ['produto_id','comprimento','largura','altura','unidade_id'];

    public function item() {
        //belongsTo = pertence a
                                          //segundo parametro é sempre a coluna que representa a fk
                                                    //terceiro pararemtro do belongsTo é a coluna,
                                                    //que representa a pk de produtos_detalhes
        return $this->belongsTo('App\Item','produto_id','id');
    }
}
