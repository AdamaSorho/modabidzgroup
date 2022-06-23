<?php

namespace App\Providers;

use App\Composers\BackendComposer;
use App\Composers\ClientComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::composer([
            "layouts.admin_base"
        ], BackendComposer::class);

        View::composer([
            "layouts.app",
            "layouts.residence.base"
        ], ClientComposer::class);
    }
}
