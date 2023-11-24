<?php

namespace App\Providers;

use App\Cart;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        view()->composer('*',function($view){
        $view->with([
            'category'=>Category::where('status',1)->orderBy('name','ASC')->get(),
        ]);

        });
       
    }
}
