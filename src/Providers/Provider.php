<?php 

namespace Kingpatje\Meta\Providers;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        //
    }
}
