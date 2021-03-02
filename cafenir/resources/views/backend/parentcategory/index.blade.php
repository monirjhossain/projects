@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Category
        <div class="text-right">
            <a href="{{ url('admin/create/parentcategory') }}" class="btn btn-primary ">Create Parent category</a>
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
                        <th scope="col">Category Name</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parentcategories as $parentcategory)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $parentcategory->p_name }}</td>
                        <td><img src="{{ asset('p_category_photo/'. $parentcategory->p_category_photo) }}" height="50" width="70" alt=""></td>
                        <td>
                            <a href="parentcategory-edit/{{ $parentcategory->id }}" class="btn btn-info">Edit</a>
                            <a href="parentcategory.destroy/{{ $parentcategory->id }}" class="btn btn-danger">Delete</a>
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