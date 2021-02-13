<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (!session('user')) {
            return redirect('/login');
        }
        return view('dashboard.dashboard');
    }
}
