@extends('layout.main')

@section('header')
    @include('layout.header')
@endsection

@section('content')
<div class="welcome-area" id="welcome">
    <!-- ***** Header Background Image Start ***** -->
    <div class="right-bg">
        <img src="assets/images/photos/header.jpg" class="img-fluid float-right" alt="">
    </div>
    <!-- ***** Header Background Image End ***** -->

    <div class="header-bg">
        <img src="assets/images/header-bg.svg" class="img-fluid" alt="">
    </div>

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h1>Industry Leading Managed Services and Staffing <span>Solutions</span></h1>
                    <p>Proven methods to capture business priorities and goals as well as current pain points that enables measurable business outcomes.</p>
                    <a href="#" class="btn-primary-line">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->

    <!-- ***** Play Button Start ***** -->
    <div class="play-button-wrapper">
        <a href="https://www.youtube.com/watch?v=dPZTh2NKTm4" class="btn-play">
            <i class="fa fa-play"></i>
        </a>
    </div>
    <!-- ***** Play Button End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Features Small Start ***** -->
<section class="section features-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <a href="orange-features-single.html" class="features-small-item">
                            <div class="icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <h5 class="features-title">Cloud Solutions</h5>
                            <p>Morbilling pharetra sapiening ut mattis viverra. Curabitur magna.</p>
                        </a>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <a href="orange-features-single.html" class="features-small-item">
                            <div class="icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h5 class="features-title">Network Services</h5>
                            <p>Donec pellentesque turpis utium lorem imperdiet semper viverra.</p>
                        </a>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <a href="orange-features-single.html" class="features-small-item">
                            <div class="icon">
                                <i class="fa fa-video-camera"></i>
                            </div>
                            <h5 class="features-title">Webcast Services</h5>
                            <p>Facilisis arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
                        </a>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                        <a href="orange-features-single.html" class="features-small-item">
                            <div class="icon">
                                <i class="fa fa-server"></i>
                            </div>
                            <h5 class="features-title">Disaster Recovery</h5>
                            <p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo.</p>
                        </a>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-80 colored" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">Cloud Services</h2>
                </div>
                <div class="left-text">
                    <p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus metus ullamcorper vel.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home active" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>NearCloud</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Office Cloud</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Backup Systems</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Hybrid Cloud</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>API Cloud</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>SDK Cloud</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Web Services</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Cloud Hosting</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="assets/images/photos/features/orange-1.png" class="img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="assets/images/photos/features/orange-2.png" class="img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">Design & Development</h2>
                </div>
                <div class="left-text">
                    <p>Phasellus vitae velit sit amet diam semper commodo quis quis libero. Morbi consequat arcu augue, molestie faucibus metus ullamcorper vel.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home active" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Web Design</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Mobile App Design</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Android Development</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>iOS Development</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Back-End</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Front-End</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>e-Commerce</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a class="btn-home" href="orange-features-single.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Print Design</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Counter Parallax Start ***** -->
<section class="parallax-counter" id="counter">
    <div class="parallax-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>96</strong>
                        <span>Project<br>Complate</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>190</strong>
                        <span>Happy<br>Customer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>12</strong>
                        <span>Experienced<br>Staff</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong>46</strong>
                        <span>Ongoing<br>Project</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Counter Parallax End ***** -->



<!-- ***** Team Start ***** -->
<section class="section padding-bottom-80" id="our-team">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Team Item Start ***** -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="user-image">
                        <img src="assets/images/photos/team/1.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3 class="user-name">Fletch Skinner</h3>
                            <span>Product Strategist</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                        <p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo. Sed at lorem.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Team Item End ***** -->
            
            <!-- ***** Team Item Start ***** -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="user-image">
                        <img src="assets/images/photos/team/2.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3 class="user-name">Lance Bogrol</h3>
                            <span>Visual Designer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                        <p>Aliquam eget convallis nunc, et porta libero. Etiam velit, lobortis ut tristique.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Team Item End ***** -->
            
            <!-- ***** Team Item Start ***** -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="user-image">
                        <img src="assets/images/photos/team/3.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3 class="user-name">Valentino Morose</h3>
                            <span>Android Developer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                        <p>Curabitur tristique nec orci quis porta. Aliquam leo justo, auctor eget sapien.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Team Item End ***** -->
            
            <!-- ***** Team Item Start ***** -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="user-image">
                        <img src="assets/images/photos/team/4.jpg" alt="">
                    </div>
                    <div class="team-content">
                        <div class="team-info">
                            <h3 class="user-name">Giles Posture</h3>
                            <span>iOS Developer</span>
                        </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-github"></i></a></li>
                        </ul>
                        <p>Nunc posuere lectus ut aliquet facilisis. Nam varius id magna et convallis.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Team Item End ***** -->
        </div>
    </div>
</section>
<!-- ***** Team End ***** -->


<!-- ***** Pricing Plans Start ***** -->
<section class="section colored padding-bottom-80" id="pricing-plans">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Pricing Plans</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Pricing Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                <div class="pricing-item">
                    <div class="pricing-header">
                        <h3 class="pricing-title">BASIC PLAN</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="number">
                            <span>1</span>
                        </div>
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">13.90</span>
                            <span class="period">/Month</span>
                        </div>
                        <ul class="list">
                            <li class="active">Unlimited Website</li>
                            <li class="active">Unlimited Users</li>
                            <li class="active">5 GB Bandwidth</li>
                            <li class="active">Highest Speed</li>
                            <li>Data Security and Backupss</li>
                            <li>1 GB Storage</li>
                            <li>24x7 Great Support</li>
                            <li>Monthly Reports and Analytics</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <!-- ***** Pricing Item End ***** -->

            <!-- ***** Pricing Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                <div class="pricing-item active">
                    <div class="pricing-header">
                        <h3 class="pricing-title">ADVANCED PLAN</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="number">
                            <span>2</span>
                        </div>
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">23.90</span>
                            <span class="period">/Month</span>
                        </div>
                        <ul class="list">
                            <li class="active">Unlimited Website</li>
                            <li class="active">Unlimited Users</li>
                            <li class="active">15 GB Bandwidth</li>
                            <li class="active">Highest Speed</li>
                            <li class="active">Data Security and Backupss</li>
                            <li class="active">1 GB Storage</li>
                            <li>24x7 Great Support</li>
                            <li>Monthly Reports and Analytics</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <!-- ***** Pricing Item End ***** -->

            <!-- ***** Pricing Item Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                <div class="pricing-item">
                    <div class="pricing-header">
                        <h3 class="pricing-title">EXPERT PLAN</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="number">
                            <span>3</span>
                        </div>
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">33.90</span>
                            <span class="period">/Month</span>
                        </div>
                        <ul class="list">
                            <li class="active">Unlimited Website</li>
                            <li class="active">Unlimited Users</li>
                            <li class="active">15 GB Bandwidth</li>
                            <li class="active">Highest Speed</li>
                            <li class="active">Data Security and Backupss</li>
                            <li class="active">1 GB Storage</li>
                            <li class="active">24x7 Great Support</li>
                            <li class="active">Monthly Reports and Analytics</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <!-- ***** Pricing Item End ***** -->
        </div>
    </div>
</section>
<!-- ***** Pricing Plans End ***** -->


<!-- ***** Parallax Start ***** -->
<section class="parallax" id="parallax-text">
    <div class="parallax-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info">
                        <p>We design and develop <span>web apps</span> that delight your users and grow your business.</p>
                        <a class="btn-white-line" href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Parallax End ***** -->


<!-- ***** Blog Start ***** -->
<section class="section white padding-bottom-80" id="blog">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Latest Blog Posts</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="assets/images/photos/blog/1.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="orange-blog-single.html">Turing Expands the Leadership Team with David Lin, Controller</a>
                        </h3>
                        <div class="text">
                            Mauris tellus sem, ultrices varius nisl at, convallis iaculis mauris. Sed eget sem vitae purus tempus dignissim.
                        </div>
                        <a href="orange-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="assets/images/photos/blog/2.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="orange-blog-single.html">Turing Partners with Velocloud to Deliver Managed SD-WAN</a>
                        </h3>
                        <div class="text">
                            Cras imperdiet faucibus sem, a dignissim urna feugiat sed. Interdum et malesuada fames ac ante ipsum.
                        </div>
                        <a href="orange-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="assets/images/photos/blog/3.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="orange-blog-single.html">Corporate IT Solutions Adds Neva as Senior Account Executive</a>
                        </h3>
                        <div class="text">
                            Quisque euismod nec lacus sit amet maximus. Ut convallis sagittis lorem auctor malesuada. Morbi auctor tortor eu.
                        </div>
                        <a href="orange-blog-single.html" class="btn-primary-line">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog End ***** -->
@endsection

@section('footer')
    @include('layout.footer')
@endsection