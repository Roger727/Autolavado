<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedor', function (Blueprint $table) {
            $table->string('Id_Proveedor',12)->primary('Id_Proveedor');
            $table->string('Nombre_Proveedor',50);
            $table->string('Apellido_Paterno_Proveedor',50);
            $table->string('Apellido_Materno_Proveedor',50);
            $table->string('Telefono_Proveedor',12);
            $table->string('RFC',10);

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
        Schema::dropIfExists('Proveedor');
    }
}
