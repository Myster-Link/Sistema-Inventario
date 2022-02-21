<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('tipo_identificacion');
            $table->integer('identificacion')->max(9)->unique();
            $table->string('nombre_cliente');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('email');
            $table->integer('numero_telefono')->max(8);
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->string('distrito')->nullable();
            $table->text('ubicacion_exacta')->nullable();

            //Clave foranea de user_id
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

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
        Schema::dropIfExists('clientes');
    }
}
