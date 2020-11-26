<?php

namespace App\Http\Middleware\Tenant;

use App\Models\Store;
use App\Tenant\TenantManager;
use Closure;
use Illuminate\Http\Request;

class Tenant
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $tenant = $this->resolveTenant($request->store ?: session()->get('tenant'));

        if (!auth()->user()->stores->contains('id', $tenant->id)) {
            return redirect()->route('dashboard');
        }
        $this->registerTenant($tenant);
        return $next($request);
    }

    public function registerTenant($tenant)
    {
        app(TenantManager::class)->setTenant($tenant);
        session()->put('tenant', $tenant->slug);
    }

    public function resolveTenant($tenantSlug)
    {
        return Store::where('slug', $tenantSlug)->first();
    }
}
