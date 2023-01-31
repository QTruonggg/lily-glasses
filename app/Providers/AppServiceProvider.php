<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Profile;
use App\Models\Policy;
use App\Models\Shared;
use DB;

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
                'blog'=> Blog::all(),
                'profile'=>DB::table('profiles')->orderBy('id','DESC')->first(),
                'policy'=>Policy::all(),
                'shared'=>Shared::all(),
                'shared_footer'=>Shared::orderBy('id')->limit(4)->get(),
                'service_footer'=>ServiceCategory::orderBy('id')->limit(4)->get(),
            ]);
        });
    }
}
