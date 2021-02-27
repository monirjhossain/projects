@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Products
        <div class="text-right">
            <a href="{{ url('admin/create/product') }}" class="btn btn-primary ">Create Product</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Elemets</th>
                        <th scope="col">Price</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->element }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img src="{{ asset('product_photo/'. $product->product_photo) }}" height="50" width="70" alt=""></td>
                        <td><a href="product.destroy/{{ $product->id }}" class="btn btn-danger">Delete</a></td>
                        {{-- <td>
                            <form action="{{ url('product.destroy', $product->id) }}" method="HEAD">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button> 
                                @method('HEAD')
                                @csrf
                            </form>    
                        </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
    </div>
</div>

@endsection