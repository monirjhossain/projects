@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Sliders
        <div class="text-right">
            <a href="{{ url('admin/slider') }}" class="btn btn-primary ">Slider List</a>
        </div>
    </div>
    <div class="cord-body">
        <div class="container col-md-8">
            <div class="wrapper wrapper-content">
                <form action="{{ url('admin/slider-update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Slider Tittle</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Slider Title" value="{{ $slider->title }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Slider Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slider Description" value="{{ $slider->description }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Slider Photo</label>
                    <input type="file" name="slider_photo" class="form-control-file" id="exampleFormControlFile1" value="{{ $slider->slider_photo }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection