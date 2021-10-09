<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();



        View::composer('*', function ($view){
           $menu = Menu::orderBy('ordering')->get()->except([4,5]);
            $service = Service::all();
            $view->with('service',$service);
            $view->with('menu', $menu);
            $view->with('agro',Menu::find([4,5]));
            //dd(Menu::find([4,5]));

        });

    }
}
