<?php

namespace App\Providers;

use App\Setting;
use App\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $setting = Setting::first();
        if($setting){
            view()->share('setting', $setting);
        }
        $cats = Category::first();
        if($cats){
            view()->share('cats', $cats);
        }
    }
}
