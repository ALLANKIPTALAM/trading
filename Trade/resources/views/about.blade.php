@extends('layouts.index')

@section('content')


    <!-- stats -->
    <section class="text-center agile_stats_main py-5">
        <div class="container py-sm-5">
            <div class="row">
                <div class="col-lg-6 order-1 pl-lg-5 px-sm-5 px-3 mt-sm-5 mt-3">
                    <div class="row">
                        <div class="col-lg-6 col-6 stat-grid">
                            <div class="counter pt-5 px-3 pb-3">
                                <i class="far fa-smile fa-2x"></i>
                                <div class="timer count-title count-number my-2" data-to="5100" data-speed="1500"></div>
                                <p class="count-text text-capitalize">Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 stat-grid">
                            <div class="counter  pt-5 px-3 pb-3">
                                <i class=" fab fa-stack-overflow fa-2x"></i>
                                <div class="timer count-title count-number my-2" data-to="4783" data-speed="1500"></div>
                                <p class="count-text text-capitalize">Successful Projects</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6  stat-grid">
                            <div class="counter  pt-5 px-3 pb-3">
                                <i class="fas fa-users fa-2x"></i>
                                <div class="timer count-title count-number my-2" data-to="2184" data-speed="1500"></div>
                                <p class="count-text text-capitalize">Professional Experts</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6  stat-grid">
                            <div class="counter  pt-5 px-3 pb-3">
                                <i class="fas fa-building fa-2x"></i>
                                <div class="timer count-title count-number my-2" data-to="74" data-speed="1084"></div>
                                <p class="count-text text-capitalize">Our Branches</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 agile_stats order-0"></div>
            </div>
        </div>
    </section>
    <!-- //stats -->

    <!-- team -->
    <section class="wthree-row py-5" id="team">
        <!-- team container -->
        <div class="team_bg_w3ls">
            <div class="container py-sm-5">
                <!-- title description -->
                <div class="row py-lg-5">
                    <div class="col-lg-5  bb-left">
                        <span class="w3-line">show case</span>
                        <h3 class="agile-title">our team</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
                        <p>Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius
                            orci. Nulla accumsan ac elit in congue. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra, per inceptos Class aptent taciti sociosqu ad litora torquent p himenaeos.</p>
                        <a class="btn btn-danger  mt-sm-4 text-capitalize scroll" href="#w3layouts_cs" role="button">read more</a>
                    </div>
                </div>
                <!-- //title description -->
                <!-- team row -->
                <div class="row py-md-5 pt-5">
                    <div class="col-lg-3 col-6 team-grids">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/t2.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <h3 class="title">Peter Johns</h3>
                                <span class="post">Creative Director</span>
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
                    <div class="col-lg-3 col-6 team-grids">
                        <div class="our-team active">
                            <div class="pic">
                                <img src="images/t1.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <h3 class="title">Kelli Smith</h3>
                                <span class="post">Chairman</span>
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
                    <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/t4.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <h3 class="title">Peter Johns</h3>
                                <span class="post">Executive Manager</span>
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
                    <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-4">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/t3.jpg" alt="team member" class="img-fluid" />
                            </div>
                            <div class="content">
                                <h3 class="title">Peter Johns</h3>
                                <span class="post">HR Manager</span>
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
    <!-- testimonials -->
    <section class="agileits-testimonials py-5" id="testimonials">
        <div class="container py-md-5 pb-sm-5">
            <div class="row py-lg-5">
                <div class="col-lg-5  bb-left">
                    <span class="w3-line  text-white">client</span>
                    <h3 class="agile-title text-white">testimonials</h3>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-3 px-lg-5">
                    <h3 class="agile-title text-white">introducing happy clients</h3>
                    <p class="text-white">ulputate ac metus at, semper varius orci. Nulla accumsan ac elit in congue. Class aptent </p>
                </div>
            </div>
            <div class="testimonial pb-lg-5">
                <div class="row py-lg-5 pt-sm-5 pt-4">
                    <div class="col-md-4">
                        <div class="card card-tooltip">
                            <div class="content">
                                <p class="title">Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. </p>
                            </div>
                        </div>
                        <div class="testi_footer">
                            <img src="images/ts1.jpg" alt="" class="image-fluid feed">
                            <h6 class="d-inline text-"> Dan Ross</h6>
                        </div>
                    </div>
                    <div class="col-md-4 my-md-0 my-5">
                        <div class="card card-tooltip">
                            <div class="content">
                                <p class="title">leo eget malesuada. Cras ultricies ligula sed magna dictDonec rutrum congue um porta. </p>
                            </div>
                        </div>
                        <div class="testi_footer">
                            <img src="images/ts2.jpg" alt="" class="image-fluid feed">
                            <h6 class="d-inline">Charles</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-tooltip">
                            <div class="content">
                                <p class="title">Cras ultricies ligula sed magna Donec rutrum congue leo eget malesuada dictum porta. </p>
                            </div>
                        </div>
                        <div class="testi_footer">
                            <img src="images/ts3.jpg" alt="" class="image-fluid feed">
                            <h6 class="d-inline">Tyson</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

@endsection