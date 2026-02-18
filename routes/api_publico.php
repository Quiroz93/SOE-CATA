<?php

use App\Http\Controllers\Admin\ProgramaController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/publico')->group(function () {
    Route::get('/programas', [ProgramaController::class, 'index']);
    Route::get('/programas/{slug}', [ProgramaController::class, 'show']);
});
