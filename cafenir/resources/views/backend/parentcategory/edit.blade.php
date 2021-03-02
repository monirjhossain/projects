@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Edit Paren Category
        <div class="text-right">
            <a href="{{ url('admin/parentcategory') }}" class="btn btn-primary ">Parent Category List</a>
        </div>
    </div>
    <div class="cord-body">
        <div class="container col-md-8">
            
            <div class="wrapper wrapper-content">
                <form method="POST" action="{{ url('admin/parentcategory-update' , $parentcategory->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="{{ $parentcategory->id }}">
                    @method('PUT')
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Parent Category Name" value="{{ $parentcategory->p_name }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Category Photo</label>
                    <input type="file" name="p_category_photo" class="form-control-file" id="exampleFormControlFile1" value="{{ $parentcategory->p_category_photo }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
                </div>
            </div>
    </div>
</div>
@endsection