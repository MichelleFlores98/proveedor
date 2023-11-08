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
        Schema::create('cuentas_contables', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('sitio');
            $table->string('cuenta_pasivo');
            $table->string('cuenta_anticipoa');
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
