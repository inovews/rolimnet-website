<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /*public function boot(UrlGenerator $url)
    {
        if(env('APP_ENV') !== 'local')
        {
            $url->forceSchema('https');
        }
    }*/

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
