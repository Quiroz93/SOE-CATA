<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->mapApiPublicoRoutes();
    }

    protected function mapApiPublicoRoutes()
    {
        Route::middleware('api')
            ->group(base_path('routes/api_publico.php'));
    }
}
