
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} - @yield('title', 'Project title')</title>

    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/css/style.css') }}" rel="stylesheet">
    @yield('styles')

</head>

<body class="">

    <div id="wrapper">
        @include('backend.layouts.partials.nav_left_sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('backend.layouts.partials.nav_top_sidebar')
            @include('backend.layouts.partials.header_breadcrumb')
            @yield('breadcrumb')
            <div class="wrapper wrapper-content">

                @yield('admin-content')
                
            </div>
            @include('backend.layouts.partials.footer_copyright')
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('assets/backend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    @yield('scripts')

</body>

</html>
