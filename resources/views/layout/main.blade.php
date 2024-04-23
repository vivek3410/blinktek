<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon/favicon.png')}}" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

	<!-- Custom CSS -->
	<link href="{{asset('assets/css/orange.css')}}" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <div>
        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="orange-index.html" class="logo">
                                <img src="{{asset('images/logo-orange.png')}}" alt="Turing"/>
                            </a>
                            <ul class="nav">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li class="submenu">
                                    <a href="javascript:;">Discover</a>
                                    <ul>
                                        <li><a href="{{route('features')}}">Features</a></li>
                                        <li><a href="orange-index.html#our-team">Our Team</a></li>
                                        <li><a href="orange-index.html#pricing-plans">Pricing Plans</a></li>
                                        <li><a href="orange-index.html#blog">Latests Blogs</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:;">Pages</a>
                                    <ul>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('features')}}">Features</a></li>
                                        <li><a href="{{route('faq')}}">FAQs</a></li>
                                        <li><a href="{{route('blog')}}">Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>
                            <ul class="header-buttons">
                                <li><a class="btn-nav-line" href="orange-features.html">Apps</a></li>
                                <li><a class="btn-nav-primary" href="orange-contact.html">Support</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="">
        @yield('content')
    </div>
    
    
@include('layout.footer')


    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

	<!-- Bootstrap -->
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

	<!-- Plugins -->
	<script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/imgfix.min.js')}}"></script>	

	<!-- Global Init -->
	<script src="{{('assets/js/custom.js')}}"></script>
</body>
</html>