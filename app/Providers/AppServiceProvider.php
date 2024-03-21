<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

use Jenssegers\Agent\Agent;


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
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        $brand=DB::table('brand')->where('brand_status','true')->limit(50)->orderBy('brand_id')->get();
        $category= DB::table('category')->where('category_status','true')->orderBy('category_id')->get();
        $sub_category= DB::table('sub_category')->orderBy('sub_category_id')->get();
        $sub_category_lvl_2= DB::table('sub_category_level_2')->orderBy('sub_category_level_2_id')->get();
        $agent = new Agent();
        View()->share(compact('brand','category','sub_category','sub_category_lvl_2','agent'));
    }
}
