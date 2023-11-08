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
        Schema::create('datos_user_proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_persona');
            $table->string('pais_impuesto');
            $table->string('retencion');
            $table->string('tipo_retencion');
            $table->string('metodo_pago');
            $table->string('dias_credito');
            $table->string('pago_recepcion');
            $table->string('factura_separada');
            $table->string('confirmacion');
            $table->string('status_confirmación');
            $table->unsignedBigInteger('id_datos')->unsigned();
            $table->foreign('id_datos')->references('id')->on('datos_proveedors');
            $table->unsignedBigInteger('id_cuentas')->unsigned();
            $table->foreign('id_cuentas')->references('id')->on('cuentas_contables');
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
