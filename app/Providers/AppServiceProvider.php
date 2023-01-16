<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ServiceCategory;
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
        view()->composer('*', function($view) {
            $view->with([
                'categories'=>  Category::where('parent_id', '=', 0)->get(),
                'banner'=>Banner::all(),
                'serviceCategory'=>ServiceCategory::all(),
            ]);
        });
    }
}
