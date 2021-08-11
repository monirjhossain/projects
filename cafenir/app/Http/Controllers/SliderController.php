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

    public function sliderSave(Request $request){
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

    public function sliderEdit($id){
        $slider = Slider::find($id);
        return view('backend.slider.edit', [
            'slider' => $slider
        ]);
    }

    public function sliderUpdate(Request $request , $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slider_photo' => 'required'
        ]);

        $sliderUpdate = Slider::find($id);
        $sliderUpdate->title = $request->input('title');
        $sliderUpdate->description = $request->input('description');
        $sliderUpdate->slider_photo = $request->input('slider_photo');

            $file = $request->file('slider_photo');
            $extention = $file->getClientOriginalExtension();
            $slider_photo = time() . '.' . $extention;
            $file->move('slider_photo', $slider_photo);
            $sliderUpdate->slider_photo = $slider_photo;
        
        $sliderUpdate->Save();
        return redirect('admin/slider')->with('success', 'Your Slider has been Updated!');
    }

    public function destroy($id){
        $deleteslider = Slider::find($id);
        $deleteslider->delete();

        return redirect('admin/slider')->with('success', 'Your slider has been deleted!');
    }
}
