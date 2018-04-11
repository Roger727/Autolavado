<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->string('Id_Cliente',12)->primary('Id_Cliente');
            $table->string('Nombre_Cliente',50);
            $table->string('Apellido_Paterno',50);
            $table->string('Apellido_Materno',50);
            $table->string('Telefono_Cliente',12);
            $table->date('Fecha_Registro');
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
        Schema::dropIfExists('cliente');
    }
}
