<?php

namespace Karim007\LaravelAgent;

use Illuminate\Support\ServiceProvider;
use Karim007\LaravelAgent\Agent\Agent;

class LaravelAgentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->app->singleton('agent', function ($app) {
            return new Agent($app['request']->server());
        });

        $this->app->alias('agent', Agent::class);*/
    }

    /**
     * Register application services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("agent", function () {
            return new Agent();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['agent', Agent::class];
    }
}
