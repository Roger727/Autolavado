<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->string('Id_Producto',12)->primary('Id_Producto');
            $table->string('Nombre_Producto',50);
            $table->smallinteger('Precio');
            $table->smallinteger('Existencia');

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
        Schema::dropIfExists('Producto');
    }
}
