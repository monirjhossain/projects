<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }

    public function contact(){
        return view('backend.contact.index');
    }
    
}
