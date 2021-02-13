@extends('backend.layouts.master');
{{-- for title --}}
@section('title')
    Update category
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
            <a href="{{ route('admin.parent-category.index') }}" class="btn btn-w-m btn-primary mt-4">Parent Category list</a>
        </div>
    </div>
@endsection
{{-- for admin content --}}
@section('admin-content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-danger">
                    {{ session('success') }}
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
                   
                            <form role="form" action="{{ route('admin.parent-category.update', $parentCategories->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                 <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label>Name</label>
                                         <input type="text" name="name" placeholder="Enter name" class="form-control" value="{{ $parentCategories->name }}">
                                    </div>
                                <div class="form-group">
                                    <label>Status</label>
                                     <select class="form-control"  name="status">
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                     </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-1 pr-4 pl-4">Update category</button>   
                                </div>
                            </form>  
                    
                </div>
                {{-- id,parent_id,name,cat_description,meta_title,meta_keyword,status --}}
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
