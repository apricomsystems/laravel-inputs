<?php

namespace ApricomSystems\LaravelInputs\Providers;

use Illuminate\Support\ServiceProvider;

class InputsServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadViewsFrom(__DIR__."/../Resources/Views", 'ap-inputs');

        $this->publishes([
            __DIR__."/../Resources/Views" => resource_path('views/vendor/apricomsystems')
        ], 'views');
    }

    public function register() {

    }
}
