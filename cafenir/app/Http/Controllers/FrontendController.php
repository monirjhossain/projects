<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Category;
use App\Reservation;
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
        $categories = Category::all();
        return view('frontend.reservation', [
            'categories' => $categories
        ]);
    }

    public function reservationConfirm(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date' => 'required',
            'time' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            'message' => 'required',
        ]);

        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'date' => $request->date,
            'time' => $request->time,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'message' => $request->message
        ]);
        return redirect('/reservation')->with('success', 'Congratulations! your reservation proccess has been successfull');
    }
    
    public function contact(){
        return view('frontend.contact');
    }
}
