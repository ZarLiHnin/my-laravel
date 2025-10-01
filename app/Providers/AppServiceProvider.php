<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // routes/api.php を読み込む
        $this->loadApiRoutes();
    }

    protected function loadApiRoutes()
    {
        Route::middleware('api')
         ->group(base_path('routes/api.php'));
    }
}
