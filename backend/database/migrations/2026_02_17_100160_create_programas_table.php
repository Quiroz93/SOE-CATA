<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('codigo')->unique();
            $table->string('nivel');
            $table->text('descripcion')->nullable();
<<<<<<<< HEAD:backend/database/migrations/2026_02_14_180200_create_programas_table.php
            $table->string('estado')->default('borrador');
========
            $table->string('estado')->default('activo');
>>>>>>>> 890bddfd09077b32064d4f51ce1f25dbb94cbd40:backend/database/migrations/2026_02_17_100160_create_programas_table.php
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
