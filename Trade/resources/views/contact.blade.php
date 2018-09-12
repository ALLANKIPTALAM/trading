@extends('layouts.index')

@section('content')

    <!-- team -->
    <section class="wthree-row py-5" id="team">
        <!-- team container -->
        <div class="team_bg_w3ls">
            <div class="container py-sm-5">
                <!-- title description -->
                <div class="row py-lg-5">
                    <div class="col-lg-5  bb-left">
                        <h3 class="agile-title">Contact us</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
                    </div>
                </div>
                <!-- //title description -->
                <!-- team row -->
                <div class="row py-md-5 pt-5">
                    <div class="col-lg-3 col-6 team-grids">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/contact_us.jpg" alt="team member" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 team-grids">
                        <div class="our-team active">
                            <div class="pic">
                                <img src="images/contactbg.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <span class="post">
                                    Address: <br>Square one, Ground floor, Donholm, Nairobi City <br>
                                    Opening Hours: <br>7AM - 6PM<br>
                                    Phone: <br>0722 123456
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 team-grids">
                        <div class="our-team active">
                            <div class="pic">
                                <img src="images/contactbg.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <ul class="social">
                                    <li>
                                        <a href="#" class="fab fa-facebook-f"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-linkedin"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- //team row -->
            </div>
        </div>
        <!-- //team container -->
    </section>
    <!-- //team -->
    

@endsection