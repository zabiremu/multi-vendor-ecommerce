<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorDashboardController extends Controller
{
    // return vendor dashboard
    public function dashboard()
    {
        return view('vendor.dashboard');
    }
}
