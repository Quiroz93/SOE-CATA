<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('oferta_programa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('oferta_id')->constrained('ofertas')->cascadeOnDelete();
            $table->foreignId('programa_id')->constrained('programas')->restrictOnDelete();
            $table->integer('cupos');
            $table->string('estado')->default('borrador');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->timestamps();
            $table->unique(['oferta_id', 'programa_id']);
            $table->index('oferta_id');
            $table->index('programa_id');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('oferta_programa');
    }
};
