<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('datos_proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rfc');
            $table->string('calle');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('ciudad');
            $table->string('estado');
            $table->integer('cp');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('clabe');
            $table->text('constancia');
            $table->text('cumpli');
            $table->text('estado_cuenta');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
};
