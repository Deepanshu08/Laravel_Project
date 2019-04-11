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
                                <li><a href="./about">About</a></li>
                                
                                <li><a href="/contact">Contact</a></li>
                                <!-- <li><a href="./contact.html">Services</a></li> -->

                            </ul>

                            <!-- Get A Quote -->
                            <div class="get-a-quote ml-4 mr-3">
                                <a href="#" class="btn uza-btn">Quote</a>
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
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">International News</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">International News</li>
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

<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="./img/bg-img/in1.jpg" alt="">
                    <!-- Video Area -->
                    
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6">
                <div class="about-us-content mb-80">
                    <h3>5.8 magnitude earthquake hits Izu Islands in Japan</h3>
                    <p>News is important for a number of reasons within a society. Mainly to inform the public about events that are around them and may affect them. Often news is for entertainment purposes too; to provide a distraction of information about other places people are unable to get to or have little influence over.</p>
                    <a href="https://www.indiatoday.in/world/story/5-8-magnitude-earthquake-hits-izu-islands-in-japan-1494902-2019-04-05" class="btn uza-btn btn-2 mt-4" target="blank">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="./img/core-img/curve-2.png" alt="">
    </div>
</section>

<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="./img/bg-img/in2.jpg" alt="">
                    <!-- Video Area -->
                    
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6">
                <div class="about-us-content mb-80">
                    <h3>US: Indian involved in call centre scam sentenced to 8 years in jail</h3>
                    <p>Court documents indicate that Nishit Kumar Patel connived with the US-based co-conspirators and the India-based call centres to extort money from American residents by impersonating Internal Revenue Service (IRS) officers between 2014 and 2016.</p>
                    <a href="https://www.indiatoday.in/world/story/us-indian-involved-in-call-centre-scam-sentenced-to-8-years-in-jail-1491814-2019-04-02" class="btn uza-btn btn-2 mt-4" target="blank">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="./img/core-img/curve-2.png" alt="">
    </div>
</section>

<section class="uza-about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="about-us-thumbnail mb-80">
                    <img src="./img/bg-img/in3.jpg" alt="">
                    <!-- Video Area -->
                    
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-md-6">
                <div class="about-us-content mb-80">
                    <h3>Don’t complicate Masood Azhar’s listing by forcefully moving resolution in UNSC: China to USA</h3>
                    <p>China has always been shielding Masood Azhar and Pakistan by always opposing global effort to declare Masood Azhar a global terrorist.</p>
                    <a href="https://www.indiatoday.in/world/story/don-t-complicate-masood-azhar-s-listing-by-forcefuly-moving-resolution-in-unsc-china-to-usa-1488541-2019-03-28" class="btn uza-btn btn-2 mt-4" target="blank">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Background Pattern -->
    <div class="about-bg-pattern">
        <img src="./img/core-img/curve-2.png" alt="">
    </div>
</section>

<!-- ***** Blog Area Start ***** -->
<section class="uza-blog-area">
    <!-- Background Curve -->
    <div class="blog-bg-curve">
        <img src="./img/core-img/curve-4.png" alt="">
    </div>

    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>More News</h2>
                    <!-- <p>Hit the button below or give us a call!</p> -->
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/in4.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>27</span> March, 2019</span>
                        <h4>Mission Shakti: Pakistan urges world to slam India, China calls for peace</h4>
                        <p>Reacting to launch of Mission Shakti, China expressed hope that all countries will uphold peace and tranquillity in the outer space. Pakistan said that countries should use space technologies only for socio-economic development.</p>
                        <a href="https://www.indiatoday.in/world/story/mission-shakti-anti-satellite-missile-pakistan-china-1487866-2019-03-27" class="read-more-btn" target="blank">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/in5.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>26</span> March, 2019</span>
                        <h4>China destroys 30,000 world maps for showing Arunachal Pradesh as part of India</h4>
                        <p>Vodafone Idea (VIL) and Bharti Airtel's mobile service revenue in India likely grew sequentially for the first time in 11 quaters in the three months ended March.India and China have held 21 rounds of talks to resolve the border dispute.
                        </p>
                        <a href="https://www.indiatoday.in/world/story/china-india-arunachal-pradesh-destroy-maps-1486989-2019-03-26" class="read-more-btn" target="blank">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-lg-4">
                <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/in6.jpg);">
                    <!-- Post Content -->
                    <div class="post-content">
                        <span class="post-date"><span>13</span> March, 2019</span>
                        <h4>Indian naval crew has rescued more than 192 people in cyclone-hit Mozambique</h4>
                        <p>Cyclone Idai made landfall in East and Southern Africa around March 15, causing widespread destruction and loss of human lives in Mozambique, Zimbabwe and Malawi.As of now, the Indian naval crew has rescued more than 192.</p>
                        <a href="https://www.indiatoday.in/world/story/indian-naval-crew-has-rescued-more-than-192-people-in-cyclone-hit-mozambique-1485137-2019-03-24" class="read-more-btn" target="blank">Read More <i class="arrow_carrot-2right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ***** Blog Area End ***** -->


<!-- ***** Newsletter Area Start ***** -->
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