@extends('layouts.frontend_master')
@section('content')
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

        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('frontend_assets') }}/images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="reserve.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="address" id="address" required="required" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <select name="package" id="" class="form-control reserve-form empty iconified">
                                                    <option value="">Select Category</option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="E-mail">
                                            </div>
                                            <div class="form-group">
                                                <select name="time" id="" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="Time">
                                                    <option value="">Select Time</option>
                                                    <option value="0">Day</option>
                                                    <option value="1">Night</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="date" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="Date of Event">
                                            </div>
                                            <div class="form-group">
                                                <select name="" id="" class="form-control reserve-form empty iconified">
                                                    <option value="">Select Quantity</option>
                                                    <option value="">150 Cup</option>
                                                    <option value="">200 Cup</option>
                                                    <option value="">300 Cup</option>
                                                    <option value="">400 Cup</option>
                                                    <option value="">500 Cup</option>
                                                    <option value="">600 Cup</option>
                                                    <option value="">700 Cup</option>
                                                    <option value="">800 Cup</option>
                                                    <option value="">900 Cup</option>
                                                    <option value="">1000 Cup</option>
                                                    <option value="">1200 Cup</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection