<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api/publico')->group(function () {
    Route::get('/programas', [App\Http\Controllers\Publico\ProgramaController::class, 'index']);
    Route::get('/programas/{slug}', [App\Http\Controllers\Publico\ProgramaController::class, 'show']);
});
