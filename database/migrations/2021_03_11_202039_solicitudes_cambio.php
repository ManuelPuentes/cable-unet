<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SolicitudesCambio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_cambio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_contrato');
            $table->string('estado');
            $table->string('nombre_usuario');
            $table->string('servicio_actual');
            $table->string('servicio_nuevo');
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
        //
    }
}
