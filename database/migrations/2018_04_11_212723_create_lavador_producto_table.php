<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavadorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavador_producto', function (Blueprint $table) {
            $table->string('Id_Producto',12);
            $table->foreign('Id_Producto')->references('Id_Producto')->on('Producto');
            $table->string('Id_Lavador',12);
            $table->foreign('Id_Lavador')->references('Id_Lavador')->on('Lavador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lavador_producto');
    }
}
