<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $table = 'cartaos';
    protected $fillable = ['nome_cartao'];

    public function despesas()
    {
        return $this->hasMany(Conta::class);
    }
}
