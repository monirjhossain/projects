<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('backend.pages.dashboard.index');
    }
}
