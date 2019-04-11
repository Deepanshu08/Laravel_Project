<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>News Portal</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Scripts -->
    <script src="{{ asset('app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        blockquote{
            border-left:none
        }

        .quote-badge{
            background-color: rgba(0, 0, 0, 0.2);   
        }

        .quote-box{

            overflow: hidden;
            margin-top: -50px;
            padding-top: -100px;
            border-radius: 17px;
            background-color: #4ADFCC;
            margin-top: 25px;
            color:white;
            width: 1000px;
            box-shadow: 2px 2px 2px 2px #E0E0E0;

        }

        .quotation-mark{

            margin-top: -10px;
            font-weight: bold;
            font-size:100px;
            color:white;
            font-family: "Times New Roman", Georgia, Serif;

        }

        .quote-text{

            font-size: 19px;
            margin-top: -65px;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <!-- <div class="top-search-area">
       
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                       
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area" >
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/home"><h1>NewsPortal</h1></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">

                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/home">- Home</a></li>
                                        <li><a href="/about">- About</a></li>
                                        <li><a href="/contact">- Contact</a></li>
                                        <li><a href="#">- News Categories</a>
                                            <ul class="dropdown">
                                                <li><a href="/International">- International News</a></li>
                                                <li><a href="/Business">- Business News</a></li>
                                                <li><a href="/Sports">- Sports News</a></li>
                                                <li><a href="/Technical">- Technical News</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a href="/home">Home</a></li>
                                <li><a href="#">News Categories</a>
                                    <ul class="dropdown">
                                        <li><a href="/International">- International News</a></li>
                                        <li><a href="/Business">- Business News</a></li>
                                        <li><a href="/Sports">- Sports News</a></li>
                                        <li><a href="/Technical">- Technical News</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about">About</a></li>
                                
                                <li><a href="/contact">Contact</a></li>
                                <!-- <li><a href="./contact.html">Services</a></li> -->

                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="/quote" class="btn uza-btn">Quote</a>
                            </div>

                            <!-- Login / Register -->
                           <!--  <div class="login-register-btn mx-3">
                                <a href="#">Login <span>/ Register</span></a>
                            </div> --> 

                            
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    <!-- Nav End -->

                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<!-- @yield('content') -->

<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Quote</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quote</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Curve -->
    <div class="breadcrumb-bg-curve">
        <img src="./img/core-img/curve-5.png" alt="">
    </div>
</div>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        Everyone has inside of him a piece of good news. The good news is that you don't know how great you can be! How much you can love! What you can accomplish! And what your potential is! 
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          Anne Frank
        </p>
        <p class="blog-post-bottom pull-right">
          <span class="badge quote-badge">1000</span>  ❤
        </p>
      </div>
    </blockquote>
</div>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        The best news of the Christian gospel is that the supremely glorious Creator of the universe has acted in Jesus Christ's death and resurrection to remove every obstacle between us and himself so that we may find everlasting joy in seeing and savoring his infinite beauty.
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          John Piper
        </p>
        <p class="blog-post-bottom pull-right">
          <span class="badge quote-badge">900</span>  ❤
        </p>
      </div>
    </blockquote>
</div>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        Headlines, in a way, are what mislead you because bad news is a headline, and gradual improvement is not.
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          Bill Gates
        </p>
        <p class="blog-post-bottom pull-right">
          <span class="badge quote-badge">800</span>  ❤
        </p>
      </div>
    </blockquote>
</div>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        I don't know about happy endings, because I don't think, eventually, anything is happy. You feel a bout of happiness with good news. Five minutes later, there could be a traffic jam or a phone call from an irritating relative or a weird thought, or it could be a tweet that annoys you, and your emotion will flip immediately.
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          Karan Johar
        </p>
        <p class="blog-post-bottom pull-right">
          <span class="badge quote-badge">700</span>  ❤
        </p>
      </div>
    </blockquote>
</div>

<div class="container">
    <blockquote class="quote-box">
      <p class="quotation-mark">
        “
      </p>
      <p class="quote-text">
        All you need to do is turn on the news, and in five minutes, you're depressed with the state of the world. Choosing joy is a completely active choice. It doesn't just happen. You can't just say, 'I want to be happy.' You have to take action.
      </p>
      <hr>
      <div class="blog-post-actions">
        <p class="blog-post-bottom pull-left">
          Billy Porter
        </p>
        <p class="blog-post-bottom pull-right">
          <span class="badge quote-badge">600</span>  ❤
        </p>
      </div>
    </blockquote>
</div>


<!-- ***** Newsletter Area Start ***** -->
<br>
<br>
<br>
<section class="uza-newsletter-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2>Subscribe to our NewsPortal</h2>
                    <p>Subscribe our Newsportal to get notification about new updates, etc...</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">
                    <form action="/subscribe" method="post">
                        @csrf
                        <input type="email" name="email" value="" placeholder="Your Email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Border Bottom -->
        <div class="border-line"></div>
    </div>
</section>
<!-- ***** Newsletter Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Contact Us</h4>

                    <!-- Footer Content -->
                    <div class="footer-content mb-15">
                        <h3>(+91) 1234567890</h3>
                        <p>Lovely Professional University,<br>Punjab, India<br>newsportal@gmail.com</p>
                    </div>
                    <p class="mb-0">Mon - Fri : 9:00 - 18:00 <br>
                    Closed on Weekends</p>
                </div>
            </div>


            
                <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        
                        <h4 class="widget-title">Quick Link</h4>

                        
                        <nav>
                            <ul class="our-link">
                                <li><a href="#">Login/Register</a></li>
                                <li><a href="#">News Categories</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Feedback</a></li>
                            </ul>
                        </nav>
                    </div>
                </div> -->

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">References</h4>
                        <nav>
                            <ul class="our-link">
                                <li><a href="https://www.indiatoday.in/">India Today</a></li>
                                <li><a href="https://news.google.com/?hl=en-IN&gl=IN&ceid=IN:en">Google News</a></li>
                                <li><a href="https://timesofindia.indiatimes.com/">Times Of India</a></li>
                                <li><a href="https://www.ndtv.com">NDTV</a></li>
                            </ul>
                        </nav>
                    </div>   
                </div>
                

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>
                        <p>An online newspaper is the online version of a newspaper, either as a stand-alone publication or as the online version of a printed periodical. </p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text mb-30">
                            <p>&copy; Copyright 2019 <a href="#">NewsPortal</a>.</p>
                        </div>

                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="https://www.facebook.com/" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" target="blank"></i></a>
                            <a href="https://twitter.com/login" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" target="blank"></i></a>
                            <a href="https://www.instagram.com/?hl=en" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" target="blank"></i></a>
                            <a href="https://www.youtube.com/" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play" target="blank"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                Copyright &copy; 2019 All rights reserved | NewsPortal
            </div>


        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>