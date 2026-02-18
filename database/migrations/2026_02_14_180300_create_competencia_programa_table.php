=> App\Models\Programa {#... id: 1, nombre: "Programa de Prueba", codigo: "PRB001", descripcion: "Descripción", estado: "publicado", ... }=> App\Models\Programa {#... id: 1, nombre: "Programa de Prueba", codigo: "PRB001", descripcion: "Descripción", estado: "publicado", ... }<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('competencia_programa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competencia_id')->constrained('competencias')->onDelete('cascade');
            $table->foreignId('programa_id')->constrained('programas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('competencia_programa');
    }
};
