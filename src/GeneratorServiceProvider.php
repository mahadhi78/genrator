<?php

namespace Mahadhi\Generator;

use Illuminate\Support\ServiceProvider;
use Mahadhi\Generator\console\GeneratorBuilder;
class GeneratorServiceProvider extends ServiceProvider
{

 /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/MahadhiGenerator.php';

        $this->publishes([
            $configPath => config_path('mahadhi/MahadhiGenerator.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../views/', 'generator_builder');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('mahadhi.publish.generator_builder', function ($app) {
            return new GeneratorBuilder();
        });

        $this->commands([
            'mahadhi.publish.generato_-builder',
        ]);
    }
}
