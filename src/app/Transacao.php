<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    public $table = "transacoes";

    protected $fillable = [
        'empresa',
        'produto',
        'quantidade',
        'data',
        'valor',
        'condicao'
    ];
    public function empresa()
    {
        return $this->hasOne('App\Empresa', 'foreign_key');
    }

    public function produto()
    {
        return $this->hasMany('App\Produto', 'foreign_key');
    }
}
