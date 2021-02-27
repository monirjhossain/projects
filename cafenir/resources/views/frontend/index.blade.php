@extends('layouts.frontend_master')
@section('content')
     <!--== 5. Header ==-->
     <section id="header-slider" class="owl-carousel">
         @foreach ($sliders as $slider)
         <div class="item">
             <div class="container">
                 <div class="header-content">
                     <h1 class="header-title">{{ $slider->title }}</h1>
                     <p class="header-sub-title">{{ $slider->description }}</p>
                 </div>
             </div>
         </div>
         @endforeach
        </section>
     
        <!--== 11. Our Bread ==-->
        <section id="bread" class="bread">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend_assets') }}/images/icons/bread_color.png">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">
                                Our Bread
                            </h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!--== 14. Have a look to our dishes ==-->
        <section id="have-a-look" class="have-a-look hidden-xs">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend_assets') }}/images/icons/food_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="menu-gallery" style="width: 50%; float:left;">
                            <div class="flexslider-container">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu1.png" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu2.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu3.png" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu4.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu5.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu6.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu7.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu8.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu9.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu10.jpg" />
                                        </li>
                                        <li>
                                            <img src="{{ asset('frontend_assets') }}/images/menu-gallery/menu11.jpg" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-heading hidden-xs color-bg" style="width: 50%; float:right;">
                            <h2 class="section-title">Have A Look To Our Dishes</h2>
                        </div>
                        

                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section>

        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend_assets') }}/images/icons/reserve_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->
@endsection