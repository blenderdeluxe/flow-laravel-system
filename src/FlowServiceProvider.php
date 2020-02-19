<?php

namespace BlenderDeluxe\FlowLaravelSystem;

use Illuminate\Support\ServiceProvider;

class FlowServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('flow.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->bindFlowApiClass();
    }

    private function bindFlowApiClass()
    {
        $this->app->bind(FlowApi::class, function ($app) {
            return new FlowApi();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [FlowApi::class];
    }
}
