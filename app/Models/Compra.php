<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public function proveedor()
    {
        return $this->hasMany(Proveedores::class);
    }

    public function producto()
    {
        return $this->hasOne(Producto::class);
    }
}
