<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compra_entradas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomComprador');
            $table->string('dni');
            $table->integer('tel');
            $table->string('numeroIdentificador');
            $table->integer('compra_id');
            $table->integer('entrada_id');

            $table->foreign('compra_id')->references('id')->on('compras');
            $table->foreign('entrada_id')->references('id')->on('entradas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_entradas');
    }
};
