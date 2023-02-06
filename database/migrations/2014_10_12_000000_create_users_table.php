<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_reportes');
        Schema::dropIfExists('facturas');
        Schema::dropIfExists('descuentos');
        Schema::dropIfExists('compra_detalles');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('compras');
        Schema::dropIfExists('proveedores');
        Schema::dropIfExists('users');
        Schema::dropIfExists('categorias');
    }
};
