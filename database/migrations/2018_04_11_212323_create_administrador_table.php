<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Administrador', function (Blueprint $table) {
            $table->string('Id_Administrador',12)->primary('Id_Administrador');
            $table->string('Nombre_Administrador',50);
            $table->string('Apellido_Paterno_Administrador',50);
            $table->string('Apellido_Materno_Administrador',50);
            $table->string('Telefono_Administrador',12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Administrador');
    }
}
