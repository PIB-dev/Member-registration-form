<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = ['nome', 'data_nascimento', 'email', 'telefone', 'tipo', 'src_foto'];

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}