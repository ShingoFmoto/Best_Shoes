<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

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
        // MySQL 5.7未満の対応
        Schema::defaultStringLength(191);
        // makerbox
        Blade::component('components.makerbox', 'makerbox');
        // shoesbox
        Blade::component('components.shoesbox', 'shoesbox');
        // shoesdetailbox
        Blade::component('components.shoesdetailbox', 'shoesdetailbox');

        // SQLログ
        \DB::listen(function ($query) {
            $sql = $query->sql;
            for ($i = 0; $i < count($query->bindings); $i++) {
                $sql = preg_replace("/\?/", $query->bindings[$i], $sql, 1);
            }

            \Log::info($sql);
        });

    }
}
