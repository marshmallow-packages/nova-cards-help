<?php

namespace Marshmallow\Cards\Help;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/nova-card-help.php' => config_path('nova-card-help.php'),
        ]);

        // $this->app->booted(function () {
        //     $this->routes();
        // });
        
        Nova::serving(function (ServingNova $event) {
            Nova::script('marshmallow-help', __DIR__.'/../dist/js/card.js');
            Nova::style('marshmallow-help', __DIR__.'/../dist/css/card.css');
        });
    }

    /**
     * Register the card's routes.
     *
     * @return void
     */
    protected function routes()
    {
        // if ($this->app->routesAreCached()) {
        //     return;
        // }

        // Route::middleware(['nova'])
        //         ->prefix('nova-vendor/simple-value')
        //         ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nova-card-help.php',
            'nova-card-help'
        );
    }
}
