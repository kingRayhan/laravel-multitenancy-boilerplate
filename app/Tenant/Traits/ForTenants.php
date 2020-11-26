<?php


namespace App\Tenant\Traits;


use App\Tenant\Observers\TenantObserver;
use App\Tenant\Scopes\TenantScope;
use App\Tenant\TenantManager;

trait ForTenants
{
    public static function boot()
    {
        parent::boot();

        $manager = app(TenantManager::class);
        $observer = app(TenantObserver::class);

        static::addGlobalScope(
            new TenantScope($manager->getTenant())
        );

        static::observe($observer);
    }
}
