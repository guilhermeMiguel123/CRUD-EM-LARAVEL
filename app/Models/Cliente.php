<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'documento', 'telefone', 'endereco'];

    public function assistencias()
    {
        return $this->hasMany(Assistencia::class);
    }
}
