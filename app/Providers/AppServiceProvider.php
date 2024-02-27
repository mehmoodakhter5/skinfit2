<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;


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
        $brand=DB::table('brand')->where('brand_status','true')->limit(50)->orderBy('brand_id')->get();
        $category= DB::table('category')->where('category_status','true')->limit(6)->orderBy('category_id')->get()->random(6);
        View()->share(compact('brand','category'));
    }
}
