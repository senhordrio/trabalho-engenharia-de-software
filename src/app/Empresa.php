<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nome',
        'cnpj',
        'endereco',
        'telefone',
        'encargo',
    ];

    public function transacao()
    {
        return $this->belongsTo('App\Transacao', 'foreign_key');
    }
}
