<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tenant.dashboard');
    }


}
