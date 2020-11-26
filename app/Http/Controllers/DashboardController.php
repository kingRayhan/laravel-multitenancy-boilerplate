<?php

namespace App\Http\Controllers;

use App\Models\Store;

class DashboardController extends Controller
{
    public function index()
    {
        $stores = Store::all();
//        return $stores;
//        $stores = auth()->user()->stores;
        return view('dashboard', compact('stores'));
    }
}
