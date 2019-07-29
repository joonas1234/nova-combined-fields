<?php

namespace Joonas1234\NovaCombinedFields;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Joonas1234\NovaCombinedFields\Commands\CreateLayout;
use Joonas1234\NovaCombinedFields\Commands\CreatePreset;
use Joonas1234\NovaCombinedFields\Commands\CreateResolver;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-combined-fields', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-combined-fields', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (!$this->app->runningInConsole()) return;

        $this->commands([
            CreateLayout::class,
            CreatePreset::class,
            CreateResolver::class,
        ]);
    }
}
