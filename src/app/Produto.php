<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'valor',
        'quantidade'
    ];

    public function transacao()
    {
        return $this->belongsTo('App\Transacao', 'foreign_key');
    }
}
