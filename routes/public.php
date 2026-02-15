<?php

use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProgramaController;
use App\Http\Controllers\Public\OfertaController;
use App\Http\Controllers\Public\NoticiaController;
use App\Http\Controllers\Public\InstructorController;
use App\Http\Controllers\Public\HistoriaExitoController;
use App\Http\Controllers\Public\CentroController;
use App\Http\Controllers\Public\InscripcionController;
use Illuminate\Support\Facades\Route;

Route::name('public.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/programas', [ProgramaController::class, 'index'])->name('programas.index');
    Route::get('/programas/{programa}', [ProgramaController::class, 'show'])->name('programas.show');

    Route::get('/ofertas', [OfertaController::class, 'index'])->name('ofertas.index');
    Route::get('/ofertas/{oferta}', [OfertaController::class, 'show'])->name('ofertas.show');

    Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
    Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');

    Route::get('/instructores', [InstructorController::class, 'index'])->name('instructores.index');
    Route::get('/instructores/{instructor}', [InstructorController::class, 'show'])->name('instructores.show');

    Route::get('/historias-exito', [HistoriaExitoController::class, 'index'])->name('historias_exito.index');
    Route::get('/historias-exito/{historia}', [HistoriaExitoController::class, 'show'])->name('historias_exito.show');

    Route::get('/centros', [CentroController::class, 'index'])->name('centros.index');
    Route::get('/centros/{centro}', [CentroController::class, 'show'])->name('centros.show');

    Route::post('/inscripcion', [InscripcionController::class, 'store'])->name('inscripcion.store');
});
