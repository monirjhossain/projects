@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Category
        <div class="text-right">
            <a href="{{ url('admin/category') }}" class="btn btn-primary ">Category List</a>
        </div>
    </div>
    <div class="cord-body">
        <div class="container col-md-8">
            
            <div class="wrapper wrapper-content">
                <form method="POST" action="{{ url('admin/category-update', $categories->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="{{ $categories->id }}">
                    @csrf
                    @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" value="{{ $categories->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Parent Category Name</label>
                    <select class="form-control" name="parent_category_id" value="{{ $categories->parent_category_id }}">
                        @foreach ($parent_categories as $item)
                            <option value="{{ $item->id }}">{{ $item->p_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Category Photo</label>
                    <input type="file" name="category_photo" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
    </div>
</div>
@endsection