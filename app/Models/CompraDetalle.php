<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    use HasFactory;

    public function compra()
    {
        return $this->hasMany(Compra::class);
    }

    public function producto()
    {
        return $this->hasMany(Producto::class);
    }
}
