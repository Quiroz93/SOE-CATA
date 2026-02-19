<?php

use App\Http\Controllers\Api\V1\Admin\ProgramaController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
        Route::apiResource('programas', ProgramaController::class);
    });
});
