<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistencia extends Model
{
    protected $fillable = ['cliente_id', 'data', 'descricao', 'tecnico', 'data_resolucao'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
