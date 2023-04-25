<?php 

namespace Kingpatje\Meta\Providers;

use Illuminate\Support\ServiceProvider;

class MetaDataProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        //
    }
}