<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Cafe Nir</title>

        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/owl.theme.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/animate.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/flexslider.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/pricing.css">
        <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/main.css">


        <script src="{{ asset('frontend_assets') }}/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="{{ asset('frontend_assets') }}/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img id="logo" src="{{ asset('frontend_assets/images/main.png') }}" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/about') }}">about</a></li>
                        <li><a href="{{ url('/menu') }}">Menu</a></li>
                        <li><a href="{{ url('/reservation') }}">Reservation</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2021 <a href="#">Your Website Link.</a> Theme by <a href="http://monirjhossain.com/"  target="_blank">Monir Hossain</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{ asset('frontend_assets') }}/js/jquery.mixitup.min.js" ></script>
        <script src="{{ asset('frontend_assets') }}/js/wow.min.js"></script>
        <script src="{{ asset('frontend_assets') }}/js/jquery.validate.js"></script>
        <script type="text/javascript" src="{{ asset('frontend_assets') }}/js/jquery.hoverdir.js"></script>
        
        <script src="{{ asset('frontend_assets') }}/js/script.js"></script>
    </body>
</html>