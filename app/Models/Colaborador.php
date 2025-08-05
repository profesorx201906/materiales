<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'nombre',
        'numero_identificacion',
        'valor_maximo_dinero',
        'categoria_id',
    ];

    /**
     * Relación: Un colaborador puede tener muchos pedidos.
     */
    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class);
    }
}