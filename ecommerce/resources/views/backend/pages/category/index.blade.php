@extends('backend.layouts.master');
{{-- for title --}}
@section('title')
    All Category
@endsection
{{-- for style --}}
@section('styles')
    <link href="{{ asset('assets/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
@endsection
{{-- for breadcrumb --}}
@section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-8">
            <h2>Category > @yield('title')</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>@yield('title')</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-4 text-right">
            <a href="{{ route('admin.parent-category.index') }}" class="btn btn-w-m btn-primary mt-4">Parent Category</a>
            <a href="{{ route('admin.category.create') }}" class="btn btn-w-m btn-primary mt-4">Create category</a>
        </div>
    </div>
@endsection
{{-- for admin content --}}
@section('admin-content')
    <div class="row">
        <div class="col-12">
            @if ($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(session()->has('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                
            @endif
        </div>
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>@yield('title')</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                        <table class="table table-hover">
                            <thead>
                            
                                <tr>
                                <th scope="col">SL.</th>
                                <th scope="col">Parent Name</th>
                                <th scope="col">Name</th>
                                <th scope="col">Meta Desc</th>
                                <th scope="col">Meta Title</th>
                                <th scope="col">Meta Keyword</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collections as $collection)    
                                <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $collection->parent_id }}</td>
                                <td>{{ $collection->name }}</td>
                                <td>{{ $collection->meta_description }}</td>
                                <td>{{ $collection->meta_title }}</td>
                                <td>{{ $collection->meta_keyword }}</td>
                                <td class="mt-5">
                                @php
                                 if ($collection->status === 0) {
                                   echo "<span class='badge mt-2 badge-pill badge-success'>Active</span>";
                                 }  else {
                                   echo "<span class='badge mt-2 badge-pill badge-warning'>Inactive</span>";
                                 }  
                                @endphp
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('admin.category.edit', $collection->id) }}" method="HEAD">
                                            <button type="submit" class="btn btn-sm btn-info">Edit</button>
                                            @method('HEAD')
                                            @csrf
                                        </form>
                                        <form action="{{ route('admin.category.destroy', $collection->id) }}" method="POST">
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button> 
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $collections->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection




{{-- for scripts --}}
@section('scripts')
    <!-- iCheck -->
    <script src="{{ asset('assets/backend/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });

    </script>
@endsection
