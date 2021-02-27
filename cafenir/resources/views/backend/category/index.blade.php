@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Category
        <div class="text-right">
            <a href="{{ url('admin/create/category') }}" class="btn btn-primary ">Create category</a>
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
                        @foreach ($categories as $category)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset('category_photo/'. $category->category_photo) }}" height="50" width="70" alt=""></td>
                        <td>
                            <a href="category-edit/{{ $category->id }}" class="btn btn-info">Edit</a>
                            <a href="category.destroy/{{ $category->id }}" class="btn btn-danger">Delete</a>
                            {{-- <form action="{{ url('category.destroy', $category->id) }}" method="HEAD">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button> 
                                @method('HEAD')
                                @csrf
                            </form>    --}}
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