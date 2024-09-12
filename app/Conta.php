<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $tables = 'contas';

    protected $fillable = ['nome_despesa', 'preco_despesa', 'cartao_id'];

    public function cartao()
    {
        return $this->belongsTo(Cartao::class);
    }
}
