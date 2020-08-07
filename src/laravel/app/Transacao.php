<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $fillable = [
        'id_empresa',
        'id_produto',
        'quantidade',
        'data',
        'valor',
        'condicao'
    ];
}
