<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $menuData = [
            'home',
            'about',
            'services',
        ];

        view()->share('menuData', $menuData);
    }
}
