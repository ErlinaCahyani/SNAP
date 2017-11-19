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
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#about-us">Specials</a></li>
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
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <table align="center" height="370" width="100%" cellspacing="0" border="0" cellpadding="0" class="table3">
				<tr>
					<td align="left" width="239" bgcolor="#B3B3B3">
						<table align="left" height=150 width="200" cellspacing="0" cellpadding="0">
							<tr>
								<td valign="top">
									<div class="style4"><Font>NAMA USER</strong></font>
									</div><br>
								</td>
							</tr>
						</table>
					</td>
						<td align="center" width="499" bgcolor="#5A6674">
							<table align="left" height=300 width="100%" cellspacing="0" cellpadding="7" class="table2">
								<tr>
									<td valign="top"><div class="style4"><Font>PROFILE</strong></font></div>
									<hr width="80%" align="center"/>
									</td>
								</tr>								
							</table>
						</td>
				</tr>
			</table>
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
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
                                  <h4><i class="fa fa-phone"></i>Telefone</h4>
                                  <p>(000) 123 456 78- (000) 123 4567 89</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>2046 Blue Spruce Lane Laurel Canada</p>
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
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>