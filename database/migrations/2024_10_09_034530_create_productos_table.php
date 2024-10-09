<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('Cod_Barras',50);
            $table->string('Nombre',50);
            $table->integer('Cantidad');
            $table->string('Proveedores',50);
            $table->string('Especificaciones',50);
            $table->date('Fecha_Caducidad');
            $table->float('Costo_compra');
            $table->float('Costo_venta');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
