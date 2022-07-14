<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use app\social\facebook;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
/*        $this->app->bind(facebook::class,function(){
            return new facebook(config('services.facebook'));
        });*/
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
