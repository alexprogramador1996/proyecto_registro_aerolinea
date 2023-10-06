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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vuelo')->nullable(false);
            $table->string('nombre_aerolinea');
            $table->string('origen');
            $table->string('destino');
            $table->date('fecha_llegada');
            $table->date('fecha_salida');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
