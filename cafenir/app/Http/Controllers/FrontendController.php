<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('frontend.index', [
            'sliders' => $sliders
        ]);
    }

    public function about(){
        return view('frontend.about');
    }

    public function menu(){
        return view('frontend.menu');
    }

    public function reservation(){
        return view('frontend.reservation');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
}
