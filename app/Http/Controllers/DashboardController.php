<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $stores = auth()->user()->stores;
        return view('dashboard', compact('stores'));
    }
}
