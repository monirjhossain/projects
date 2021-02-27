@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Category
        <div class="text-right">
            <a href="{{ url('admin/parentcategory') }}" class="btn btn-primary ">Parent Category List</a>
        </div>
    </div>
    <div class="cord-body">
        <div class="container col-md-8">
            
            <div class="wrapper wrapper-content">
                <form method="POST" action="{{ url('admin/parentcategory-save') }}" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Parent Category Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Category Photo</label>
                    <input type="file" name="p_category_photo" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
    </div>
</div>
@endsection