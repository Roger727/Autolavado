<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Servicio', function (Blueprint $table) {
            $table->string('Id_Servicio',12)->primary('Id_Servicio');
            $table->string('Nombre_Servicio',50);
            $table->smallinteger('Precio');

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
        Schema::dropIfExists('Servicio');
    }
}
