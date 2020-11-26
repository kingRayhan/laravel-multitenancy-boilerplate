<?php

namespace App\Providers;

use App\Tenant\Observers\TenantObserver;
use App\Tenant\TenantManager;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

//        DB::listen(function ($db) {
//            dump($db->sql);
//        });

        $this->app->singleton(TenantManager::class, function () {
            return new TenantManager();
        });

        $this->app->singleton(TenantObserver::class, function () {
            return new TenantObserver(app(TenantManager::class)->getTenant());
        });
    }
}
