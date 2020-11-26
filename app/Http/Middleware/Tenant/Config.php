<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use Illuminate\Http\Request;

class Config
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
        config()->set('tenant.slug', session()->get('tenant'));
        return $next($request);
    }
}
