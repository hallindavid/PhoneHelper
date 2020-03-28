<?php

namespace Hallindavid\PhoneHelper;

use Illuminate\Support\ServiceProvider;

class PhoneHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/phonehelper.php', 'phonehelper'
        );

        $this->app->singleton('phonehelper', function () {
            return $this->app->make('Hallindavid\PhoneHelper\PhoneHelper');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/phonehelper.php'=>config_path('phonehelper.php'),
        ]);
    }
}
