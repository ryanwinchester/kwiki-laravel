<?php

namespace Kwiki\Core;

use Illuminate\Support\ServiceProvider;

class KwikiServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        // Routes
        $this->app->group(['prefix' => config('kwiki.path', 'kwiki'), 'namespace' => 'Kwiki\Core'], function ($app) {
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
        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kwiki');
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/kwiki'),
        ]);

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/translations', 'kwiki');
        $this->publishes([
            __DIR__.'/../resources/translations' => base_path('resources/lang/vendor/kwiki'),
        ]);
    }
}
