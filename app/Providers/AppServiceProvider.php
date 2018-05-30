<?php

namespace togoany\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       \Illuminate\Support\Facades\Schema::defaultStringLength(191);//adcionada por mim em 14/05 Resovel o problema com o migration =).
    }

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
