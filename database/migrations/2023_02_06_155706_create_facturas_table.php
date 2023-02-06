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
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id();
            $table->integer('Descuento');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('descuento_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });



        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Producto');
            $table->integer('Cantidad');
            $table->string("Tipo_Pago");
            $table->integer('Numero_Referencia');
            $table->foreignId('proveedores_id')->constrained();
            $table->timestamps();
        });

        Schema::create('compra_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('Cantidad');
            $table->integer('Subtotal');
            $table->foreignId('compras_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->integer('Total');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('descuento_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Producto');
            $table->integer('Precio');
            $table->boolean('Status');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('compra_detalles_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('factura_reportes', function (Blueprint $table) {
            $table->id();
            $table->integer('Amount');
            $table->integer('Subtotal');
            $table->foreignId('factura_id')->constrained()->onDelete('cascade');
            $table->foreignId('producto_id')->constrained()->onDelete('cascade');
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

    }
};
