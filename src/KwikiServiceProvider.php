<?php

namespace Kwiki;

use Illuminate\Support\ServiceProvider;
use Pagemark\Pagemark;

class KwikiServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom(
            __DIR__.'/../config/kwiki.php', 'kwiki'
        );

        // Controller
        $this->app->bind(KwikiController::class, function ($app) {
            return new KwikiController(
                $app->make(Pagemark::class),
                $app['config']->get('kwiki.folder'),
                $app['config']->get('kwiki.view')
            );
        });

        // Routes
        $routeGroup = [
            'prefix'    => $this->app['config']->get('kwiki.route'),
            'namespace' => 'Kwiki'
        ];
        $this->app->group($routeGroup, function () {
            require __DIR__.'routes.php';
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Config publishing
        $this->publishes([
            __DIR__.'/../config/kwiki.php' => config_path('kwiki.php'),
        ], 'config');

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kwiki');
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/kwiki'),
        ], 'views');

        // Public assets
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/kwiki'),
        ], 'public');

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/translations', 'kwiki');
        $this->publishes([
            __DIR__.'/../resources/translations' => base_path('resources/lang/vendor/kwiki'),
        ], 'translations');
    }
}
