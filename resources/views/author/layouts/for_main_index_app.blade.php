<!DOCTYPE html>
<html lang="en">
<head>
    <title> Main Page - Sivkov's Profile</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('public/frontend/img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>





<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                @guest

                <a href="{{route('login') }}" class="site-btn header-btn">Login</a>



                @if (Route::has('register'))
                    <a class="site-btn header-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    <nav class="main-menu">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="courses.html">Profile</a></li>
                            <li><a href="blog.html">Blogs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </nav>
                    @endguest

            </div>
        </div>
    </div>
</header>

{{--только МЕНЯТЬ background надо --}}
<section class="hero-section set-bg" data-setbg="{{asset('public/frontend/img/bg.jpg')}}">
    <div class="container">
        <div class="hero-text text-white">
            <h2>Subscribe For Updates</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form class="intro-newslatter">
                    <input type="text" placeholder="Name">
                    <input type="text" class="last-s" placeholder="E-mail">
                    <button class="site-btn">Sign Up Now</button>
                </form>
            </div>
        </div>
    </div>
</section>


@yield('content')

<!-- search section -->
<section class="search-section">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2>Search by tag/tags</h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- search form -->
                    <form class="course-search-form">
                        <input type="text" placeholder="Course">
                        <input type="text" class="last-m" placeholder="Category">
                        <button class="site-btn">Search the doc</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->

<!-- footer section -->
<footer class="footer-section spad pb-0">
    <div class="footer-top">
        <div class="footer-warp">
            <div class="row">
                <div class="widget-item">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>1481 Creekside Lane <br>Avila Beach, CA 931</li>
                        <li>+53 345 7953 32453</li>
                        <li>yourmail@gmail.com</li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Engeneering</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Graphic Design</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Development</h4>
                    <ul>
                        <li><a href="">Applied Studies</a></li>
                        <li><a href="">Computer Engeneering</a></li>
                        <li><a href="">Software Engeneering</a></li>
                        <li><a href="">Informational Engeneering</a></li>
                        <li><a href="">System Engeneering</a></li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h4>Newsletter</h4>
                    <form class="footer-newslatter">
                        <input type="email" placeholder="E-mail">
                        <button class="site-btn">Subscribe</button>
                        <p>*We don’t spam</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-warp">
            <ul class="footer-menu">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
        </div>
    </div>
</footer>
<!-- footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
<script src="{{asset('public/frontend/js/circle-progress.min.js')}}"></script>
<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>