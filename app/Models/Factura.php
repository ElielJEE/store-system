<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    public function reporte()
    {
        return $this->hasMany(Report::class);
    }

    public function descuento()
    {
        return $this->hasOne(Descuento::class);
    }

    public function empleado()
    {
        return $this->hasOne(User::class);
    }
}
