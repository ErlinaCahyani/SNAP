<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SNAP Restaurant</title>
		<meta name="description" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
		<link rel="stylesheet" href="index.css">
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="{{ asset('ResTem/css/owl.carousel.css') }}">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="{{ asset('ResTem/css/bootstrap.min.css') }}">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="{{ asset('ResTem/css/font-awesome.min.css') }}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('ResTem/css/animate.min.css') }}">

		<link rel="stylesheet" href="{{ asset('ResTem/css/main.css') }}">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="{{ asset('ResTem/css/responsive.css') }}">
		<!-- Js -->
        <script src="{{ asset('ResTem/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="{{ asset('ResTem/js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
        <script src="{{ asset('ResTem/js/jquery.nav.js') }}"></script>
        <script src="{{ asset('ResTem/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('ResTem/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ResTem/js/plugins.js') }}"></script>
        <script src="{{ asset('ResTem/js/wow.min.js') }}"></script>
        <script src="{{ asset('ResTem/js/main.js') }}"></script>
	</head>

	<body>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <img src="{{ asset('ResTem/images/logo.png') }}" alt="Logo">
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     <i class="fa fa-user" style="font-size: 20px;"></i><span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li style="padding-left: 10px">
                                        <strong>{{ Auth::user()->name }}</strong>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ url('/') }}">Specials</a></li>
                                <li><a href="#blog">Menus</a></li>
                                <li><a href="#price">Reserve/Order</a></li>
                                <!--<li><a href="#subscribe">news</a></li>-->
                                <li><a href="#contact-us">About</a></li>
                              </ul>

                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    
    <!--
    Content start
    ============================== -->
    <div class="cream bapp bapp2">
        <div class="container">
            <div class="col-sm-12">
                <div class="row putih">
                    <div class="col-sm-3 gra">

                        @yield('contenkiri')
                    </div>
                    <div class="col-sm-9 putih p3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!-- .containe close -->
    </div><!-- #call-to-action close -->
	<!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Menu <span>Disarankan</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-1.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-3.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-4.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-1.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-3.jpg') }}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{ asset('ResTem/images/slider/slider-img-4.jpg') }}" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>(000) 123 456 78- (000) 123 4567 89</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>Jl. Kaliurang Km 0, Sleman, Yogyakarta</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>rest@gmail.com - rest@mail.ru</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('ResTem/images/photo/photo-1.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('ResTem/images/photo/photo-2.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('ResTem/images/photo/photo-3.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('ResTem/images/photo/photo-4.jpg')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2017 - All Rights Reserved.Design and Developed By SNAP Team</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>