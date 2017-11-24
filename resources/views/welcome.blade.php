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
        <script src="{{ asset('ResTem/js/boots.js') }}"></script>
        <script src="{{ asset('ResTem/js/jquery.nav.js') }}"></script>
        <script src="{{ asset('ResTem/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('ResTem/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('ResTem/js/plugins.js') }}"></script>
        <script src="{{ asset('ResTem/js/wow.min.js') }}"></script>
        <script src="{{ asset('ResTem/js/main.js') }}"></script>
    </head>

    <body>
    <!--
    header-img start 
    ============================== -->
    <section id="hero-area">
      <div class="container-header">
        <img class="img-responsive" src="{{ asset('ResTem/images/header.jpg') }}" alt=""></div>
        <div class="container-header2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="block">
                        <!--<h1 class="headingheader">SNAP Restaurant</h1>-->
                        <div >
                            <center><img class="img-responsive" src="{{ asset('ResTem/images/logo-header.png') }}" alt=""></center>
                        </div>
                        </br>
                        <p class="conten-head">
                            Selamat datang di Restaurant Snap. Kepuasan pelanggan adalah prioritas kami.
                            Makan mudah, cepat dan sedap. 
                        </p>
                    </div><!--end block-->
                </div>
                <div class="col-md-3"></div>
            </div>
      </div>
    </section>
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
                                        @if ( Auth::user()->type ="user")
                                        <a href="{{ url('/user') }}">Dashboard</a>
                                        @endif
                                        @if (Auth::user()->type ="admin")
                                        <a href="{{ url('/admin') }}">Dashboard</a>
                                        @endif
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
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#specials">Specials</a></li>
                                <li><a href="#about-us">Menus</a></li>
                                <li><a href="#blog">Reserve/Order</a></li>
                                <!--<li><a href="#subscribe">news</a></li>-->
                                <li><a href="#price">About</a></li>
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
    Specials start
    ============================= -->

    <section id="specials">
                <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Our <span>Special Menus</span> 
                        </h1>
                        </br>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Nikmati menu special kami</br></p>
                        </br>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->

        <div class="container">
        <div class="row wow fadeInUp">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row coklat">
                            <div class="container-fluid">
                                <div class="col-md-6 conten-cs">
                                    <font class="style5">Kepiting Goreng Yummmi</font><br><br><br>
                                    <font class ="style6"> Kalimat kalimat kalimat</font>   <br><br>
                                    <font class ="tombol1 col-md-offset-5"> <i class="fa fa-search" aria-hidden="true"></i> Search </font>
                                    
                                    <font class ="tombol1  col-md-offset-5"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Order</font>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-responsive img-cs" src="{{ asset('ResTem/images/photo/cSpecial-1.jpg') }}" alt="First Menu Special">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row coklat">
                            <div class="container-fluid">

                                <div class="col-md-6 conten-cs">
                                    Chicken Mushroom Special
                                </div>
                                <div class="col-md-6">
                                    <img class="img-responsive img-cs" src="{{ asset('ResTem/images/photo/cSpecial-2.jpg') }}" alt="First Menu Special">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row coklat">
                            <div class="container-fluid">
                                <div class="col-md-6 conten-cs">
                                    Hot Coffee
                                </div>
                                <div class="col-md-6">
                                    <img class="img-responsive img-cs" src="{{ asset('ResTem/images/photo/cSpecial-3.jpg') }}" alt="First Menu Special">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end carousel-->
                
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
        </div>
    </section><!-- #call-to-action close -->

    <!--
    Special end
    ============================= -->

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
    about-us start
    ============================== -->
    <section id="about-us">
    <center><h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" ><span>MENUS</span></center>
        
        <div class="container">
            <div class="row blocks">
                <div class="col-sm-5 col-md-offset-1">
                    <div class="bocks">
                        <div class="col-md-7 gambar4">                      
                            <img src="{{ asset('ResTem/images/blog/blog-img-3.jpg') }}" alt="">
                        </div>
                        <div class="col-md-5">
                            <font class="style5">Beef Steak</font><br><br>
                            <font class="style6">Daging sapi ditambahkan kentang, wortel, dan jagung panggang</font><br><br>
                            <img class="tombol" src="{{ asset('ResTem/images/search.png') }}" alt="">
                            <img class="tombol" src="{{ asset('ResTem/images/cart.png') }}" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-5 col-md-offset-1">
                    <div class="bocks">
                        <div class="col-md-7 gambar4">                      
                            <img src="{{ asset('ResTem/images/blog/blog-img-5.jpg') }}" alt="">
                        </div>
                        <div class="col-md-5">
                            <font class="style5">Dorayaki</font><br><br>
                            <font class="style6">Tumpukan kue dorayaki khas Jepang dengan lelehan selai Strawberry</font><br><br>
                            <img class="tombol" src="{{ asset('ResTem/images/search.png') }}" alt="">
                            <img class="tombol" src="{{ asset('ResTem/images/cart.png') }}" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row pull-right col-sm-1">
                <h1><i  class="fa fa-arrow-right" aria-hidden="true"></i></h1><br><br><br>
            </div>
        </div>
        
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                <div class="gambar2">
                        <a target="_blank" href="">
                            <img src="{{ asset('ResTem/images/drink.png') }}" alt="Forest">
                        </a>
                        <div class="style2"><font>SEA FOOD</font></div>
                 </div>
                 </div>
                 <div class="col-sm-3">
                 <div class="gambar2">
                        <a target="_blank" href="">
                            <img src="{{ asset('ResTem/images/food.png') }}" alt="Forest">
                        </a>
                        <div class="style2"><font>STEAK</font></div>
                 </div>
                 </div>
                 <div class="col-sm-3">
                 <div class="gambar2">
                        <a target="_blank" href="">
                            <img src="{{ asset('ResTem/images/food.png') }}" alt="Forest">
                        </a>
                        <div class="style2"><font>PASTA</font></div>
                 </div>
                 </div>
                 <div class="col-sm-3">
                 <div class="gambar2">
                        <a target="_blank" href="">
                            <img src="{{ asset('ResTem/images/drink.png') }}" alt="Forest">
                        </a>
                        <div class="style2"><font>DRINK</font></div>
                 </div>
                 </div>
             </div>
         </div>
         
    </section><!-- #call-to-action close -->
    <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container" width="80%">
        <div class="col-sm-6">
            <div class="gambar3">
                <a target="_blank" href="">
                    <img src="{{ asset('ResTem/images/books-table.png') }}" alt="Forest">
                </a>
                <div class="style1"><font>Book Tables</font></div>
                <div class="style5"><font>Booking meja disini</font></div>
         </div>
         </div>
         <div class="col-sm-6">
         <div class="gambar3">
                <a target="_blank" href="">
                    <img src="{{ asset('ResTem/images/cart.png') }}" alt="Forest">
                </a>
                <div class="style1"><font>Order Menu</font></div>
                <div class="style5"><font>Pesan makanan disini</font></div>
         </div>
         </div>
        </div><!-- .containe close -->
    </section><!-- #blog close -->
    <!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">ABOUT <span>SNAP</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Anda dapat melihat Restaurant Snap disini </p>
                        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63251.00719210155!2d110.34632093084797!3d-7.769884421320139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c97a30377d%3A0x331b605ec75c93d0!2sPreksu+Ayam+Geprek+%26+Susu!5e0!3m2!1sid!2sid!4v1511150285407" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </center>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
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