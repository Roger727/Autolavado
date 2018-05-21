<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedor_Producto', function (Blueprint $table) {
            $table->string('Id_Producto',12);
            $table->foreign('Id_Producto')->references('Id_Producto')->on('Producto');
            $table->string('Id_Proveedor',12);
            $table->foreign('Id_Proveedor')->references('Id_Proveedor')->on('Proveedor');
            $table->primary(['Id_Producto','Id_Proveedor']);
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
        Schema::dropIfExists('Proveedor_Producto');
    }
}
