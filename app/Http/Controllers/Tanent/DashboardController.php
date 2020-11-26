<?php

namespace App\Http\Controllers\Tanent;

use App\Http\Controllers\Controller;
use App\Models\Project;

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
        $projects = Project::all();
        return view('tenant.dashboard', compact('projects'));
    }
}
