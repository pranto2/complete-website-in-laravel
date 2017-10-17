<?php

namespace App\Providers;

use App\General;
use App\Logo;
use App\Menu;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $menus = Menu::all();
        $logo = Logo::find(1);
        View::share(compact('menus', 'logo'));
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
