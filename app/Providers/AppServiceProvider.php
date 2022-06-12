<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
       if (Schema::hasTable('categories')) {
           $categories=Category::all();
           $moreAnn = Category::MoreAnn();
           View::share(['categories', $categories],['moreAnn',$moreAnn]);
       }
       Paginator::useBootstrap();
       
    }
}
