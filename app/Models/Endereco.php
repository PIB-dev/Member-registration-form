<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['cep', 'logradouro', 'bairro', 'numero', 'localidade', 'uf', 'complemento'];

    public function membro()
    {
        return $this->belongsTo(Membro::class);
    }
}