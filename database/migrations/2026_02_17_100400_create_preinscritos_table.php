<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('preinscritos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('oferta_id')->constrained('ofertas')->cascadeOnDelete();
            $table->foreignId('oferta_programa_id')->constrained('oferta_programa')->cascadeOnDelete();
            $table->string('nombre');
            $table->string('documento');
            $table->string('correo');
            $table->string('estado')->default('pendiente');
            $table->timestamps();
            $table->unique(['oferta_programa_id', 'documento']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('preinscritos');
    }
};
