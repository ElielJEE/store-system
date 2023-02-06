<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuentos extends Model
{
    use HasFactory;


    public function factura()
    {
        return $this->hasOne(Factura::class);
    }
}
