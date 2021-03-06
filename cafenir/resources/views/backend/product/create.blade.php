@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Products
        <div class="text-right">
            <a href="{{ url('admin/product') }}" class="btn btn-primary ">Product List</a>
        </div>
    </div>
    <div class="cord-body">
        <div class="container col-md-8">
            <div class="wrapper wrapper-content">
                <form action="{{ url('admin/product-save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Elements</label>
                    <input type="text" name="element" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Elements">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Product Photo</label>
                    <input type="file" name="product_photo" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
    </div>
</div>
@endsection