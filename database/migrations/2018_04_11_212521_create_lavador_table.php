<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLavadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lavador', function (Blueprint $table) {
            $table->string('Id_Lavador',12)->primary('Id_Lavador');
            $table->string('Nombre_Lavador',50);
            $table->string('Apellido_Paterno_Lavador',50);
            $table->string('Apellido_Materno_Lavador',50);
            $table->string('Telefono_Lavador',12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lavador');
    }
}
