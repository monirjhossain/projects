<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index', [
            'sliders' => $sliders
        ]);
    }
    public function create()
    {
        return view('backend.slider.create');
    }

    public function silerSave(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slider_photo' => 'required'
        ]);

        $slider_photo = $request->file('slider_photo')->getClientOriginalName();
        $request->file('slider_photo')->move('slider_photo', $slider_photo);

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'slider_photo' => $slider_photo
        ]);
        return redirect('admin/slider')->with('success', 'Your slider has been added successfully!');
    }

    public function destroy($id){
        $deleteslider = Slider::find($id);
        $deleteslider->delete();

        return redirect('admin/slider')->with('success', 'Your slider has been deleted!');
    }
}
