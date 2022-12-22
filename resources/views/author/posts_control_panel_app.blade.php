<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
    <title>John Doe - Professional web designer and photographer</title>

    <!-- Bootstrap -->
    <link href="{{asset('public/frontend/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="{{asset('public/frontend/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{asset('public/frontend/assets/lightbox/css/lightbox.css')}}" rel="stylesheet">
    <!-- Text Rotator-->
    <link href="{{asset('public/frontend/assets/textrotator/simpletextrotator.css')}}" rel="stylesheet">
    <!-- FlexSlider -->
    <link href="{{asset('public/frontend/assets/flexslider/flexslider.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <!-- Animations -->
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <!-- Custom Favicon -->
    <link href="{{asset('public/frontend/img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <![endif]-->
</head>
<body id="top">
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>

<!-- ****************************** Preloader ************************** -->
<div id="preloader"></div>


<!-- ==========================
HEADER SECTION
=========================== -->
<header id="home">
    <!-- creative menu -->
    <div class="container-fluid">
        <div class="row">
            <div class="menu-wrap">
                <nav class="menu">
                    <!-- Menu Links -->
                    <div class="icon-list">

                        <a href="{{url('/')}}"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                        <a href="{{url('/#about')}}"><i class="fa fa-fw fa-quote-left"></i><span>Повышение квалификации</span></a>
                        <a href="{{url('/#portfolio')}}"><i class="fa fa-fw fa-picture-o"></i><span>Дипломы</span></a>

                        <a href="{{url('/#blog') }}"> <i class="fa fa-fw fa-rss"></i><span>Благодарности</span></a>
                        <a href="{{url('/#contact')}}"><i class="fa fa-fw fa-envelope-o"></i><span>Сертификаты</span></a>
                        <a href="{{url('/#contact')}}"><i class="fa fa-fw fa-envelope-o"></i><span>Успехи детей</span></a>

                        <!-- Authentication Links -->
                        <a href="index.html#home"><i class="fa fa-fw fa-user"></i><span> {{ Auth::user()->name }}</span></a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" ><i class="fa fa-fw fa-sign-out"></i><span>{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav>
            </div>
            <button class="menu-button" id="open-button"></button><!-- menu button -->
        </div><!--/row-->
    </div><!--/container-->
    <!-- Header Image -->

</header>
<!-- ==========================
HEADER SECTION END
=========================== -->
<section class="hero" id="hero">
    <div class="container">
        <!-- Slider Button (don't edit!)-->
        <div class="row">
            <div class="col-md-12 text-right navicon">
                <a id="nav-toggle" class="nav_slide_button" href="index.html#"><span></span></a>
            </div>
        </div>
        <!-- HEADER HEADLINE -->
        <div class="row">
            <div class="col-md-8 col-md-offset-1 inner">
                <h1 class="animated fadeInDown">
                    S<span style="color:#E04343;">IV</span>KOV<br/>
                    <span>Pro<span style="color:#FFE800">fi</span>le</span>
                </h1><!-- Title -->
                <h3 class="animated fadeInUp delay-05s"><span class="rotate">English Teacher's Profile</span></h3><!-- Text Rotator -->
            </div>
        </div>
        <!-- Learn More Button -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <a href="index.html#about" class="scrollto wow fadeInUp delay-5s ">
                    <p>SEE MORE</p>
                    <p class="scrollto--arrow"><img src="{{asset('public/frontend/img/scroll-down.png')}}" alt="scroll down arrow"></p>
                </a>
            </div>
        </div>
    </div>
</section>




<div class="container">


    @yield('content')
    <!-- PORTFOLIO ITEM END -->

</div><!--/.container-->

<section>
    <div class="container-fluid">
        <div class="row color-bg">
            <div class="col-md-6 nopadding subscribe text-center">
                <h1><i class="fa fa-paper-plane"></i><span>Subscribe, please</span></h1><!-- Heading -->
                <form action="{{route('author.store.newsletter')}}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="Paste Your Email" required><!-- E-Mail -->
                    <input type="submit" name="" value="Send"><!-- Submit Button -->
                </form>
            </div>
            <div class="col-md-6 nopadding features-intro-img">
                <div class="about-image" style="background-image:url({{asset('public/frontend/img/newsletter.png')}})"></div><!-- Right Image -->
            </div>
        </div>
    </div>
</section>

<section class="text-center section-padding contact-wrap" id="contact">
    <!-- To Top Button -->
    <a href="index.html#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Drop <span>me</span> a line</h1>
            </div>
        </div>
        <div class="row contact-details">
            <!-- Adress Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                    <p>23 Ipsum street, New York</p>
                </div>
            </div>
            <!-- Phone Number Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                    <p>+12 345 6789</p>
                </div>
            </div>
            <!-- E-Mail Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                    <p><a href="index.html#">info@themewagon.com</a></p>
                </div>
            </div>
        </div>

        <br>
        <!-- Social Buttons - use font-awesome, past in what you want -->
        <div class="row">
            <div class="col-md-12">
                <ul class="social-buttons">
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-dribbble"></i></a></li><!-- dribble -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-twitter"></i></a></li><!-- twitter -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-deviantart"></i></a></li><!-- deviantart -->
                    <li><a href="index.html#" class="social-btn"><i class="fa fa-youtube"></i></a></li><!-- youtube -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
FOOTER SECTION
=========================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>All Rights Reserved. &copy; 2015 <a href="http://www.themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</footer>
<!-- ==========================
FOOTER SECTION END
=========================== -->


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- SmoothScroll -->
<script type="text/javascript" src="{{asset('public/frontend/assets/smoothscroll/smoothscroll.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
<!-- classie.js -->
<script src="{{asset('public/frontend/js/classie.js')}}"></script>
<!-- FlexSlider -->
<script src="{{asset('public/frontend/assets/flexslider/jquery.flexslider.js')}}"></script>
<!-- Modernizr -->
<script src="{{asset('public/frontend/js/modernizr.js')}}"></script>
<!-- Text Rotator -->
<script src="{{asset('public/frontend/assets/textrotator/jquery.simple-text-rotator.js')}}"></script>
<!-- Lightbox.js -->
<script src="{{asset('public/frontend/assets/lightbox/js/lightbox.min.js')}}"></script>
<!-- Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
<!-- Theme JavaScript Core -->
<script src="{{asset('public/frontend/js/main.js')}}"></script>
<script src="{{asset('public/frontend/js/script.js')}}"></script>
<script src="{{asset('public/frontend/assets/html5shiv/html5shiv.js')}}"></script>
<script src="{{asset('public/frontend/assets/respond/respond.min.js')}}"></script>
{{--<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/assets/owl.carousel.min.css')}}">--}}

<!-- GOOGLE MAPS DATA -->
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googlemaps');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }

</script>

<!-- TEXT ROTATOR SETTINGS -->
<script type="text/javascript">
    $(".rotate").textrotator({
        animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
    });
</script>


<script>
            @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>

</body>
</html>

