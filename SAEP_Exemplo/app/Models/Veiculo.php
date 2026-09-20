<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'cliente_id',
    ];

    public $timestamps = true;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}