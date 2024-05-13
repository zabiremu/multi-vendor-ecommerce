<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // return admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
