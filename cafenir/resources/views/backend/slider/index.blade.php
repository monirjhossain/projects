@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Sliders
        <div class="text-right">
            <a href="{{ url('admin/create/slider') }}" class="btn btn-primary ">Create Slider</a>
        </div>
        
    </div>
    <div class="cord-body">
        <div class="container col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="wrapper wrapper-content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Slider Title</th>
                        <th scope="col">Slider Description</th>
                        <th scope="col">Slider Photo</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->description }}</td>
                        <td><img src="{{ asset('slider_photo/'. $slider->slider_photo) }}" height="50" width="70" alt=""></td>
                        <td>
                            <a href="slider-edit/{{ $slider->id }}" class="btn btn-info">Edit</a>
                            <a href="slider.destroy/{{ $slider->id }}" class="btn btn-danger">Delete</a>
                        </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>

@endsection