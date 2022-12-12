<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
    <title>John Doe - Professional web designer and photographer</title>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('public/frontend/assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="<?php echo e(asset('public/frontend/assets/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Lightbox -->
    <link href="<?php echo e(asset('public/frontend/assets/lightbox/css/lightbox.css')); ?>" rel="stylesheet">
    <!-- Text Rotator-->
    <link href="<?php echo e(asset('public/frontend/assets/textrotator/simpletextrotator.css')); ?>" rel="stylesheet">
    <!-- FlexSlider -->
    <link href="<?php echo e(asset('public/frontend/assets/flexslider/flexslider.css')); ?>" rel="stylesheet">
    <!-- Theme Style -->
    <link href="<?php echo e(asset('public/frontend/css/style.css')); ?>" rel="stylesheet">
    <!-- Animations -->
    <link href="<?php echo e(asset('public/frontend/css/animate.css')); ?>" rel="stylesheet">
    <!-- Custom Favicon -->
    <link href="<?php echo e(asset('public/frontend/img/favicon.ico')); ?>" rel="shortcut icon" type="image/x-icon" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body id="top">
<div class="card-body">
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
</div>

<!-- ****************************** Preloader ************************** -->



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
                        <a href="index.html#home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                        <a href="index.html#about"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
                        <a href="index.html#service"><i class="fa fa-fw fa-globe"></i><span>Service</span></a>
                        <a href="index.html#portfolio"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
                        <a href="index.html#blog"><i class="fa fa-fw fa-rss"></i><span>Blog</span></a>
                        <a href="index.html#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
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



<div class="container">
    <div class="row row-offset-0">

        <?php echo $__env->yieldContent('content'); ?>
        <!-- PORTFOLIO ITEM END -->
    </div><!--/row-->
</div><!--/.container-->

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
<script type="text/javascript" src="<?php echo e(asset('public/frontend/assets/smoothscroll/smoothscroll.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('public/frontend/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!-- Waypoints -->
<script src="<?php echo e(asset('public/frontend/js/waypoints.min.js')); ?>"></script>
<!-- classie.js -->
<script src="<?php echo e(asset('public/frontend/js/classie.js')); ?>"></script>
<!-- FlexSlider -->
<script src="<?php echo e(asset('public/frontend/assets/flexslider/jquery.flexslider.js')); ?>"></script>
<!-- Modernizr -->
<script src="<?php echo e(asset('public/frontend/js/modernizr.js')); ?>"></script>
<!-- Text Rotator -->
<script src="<?php echo e(asset('public/frontend/assets/textrotator/jquery.simple-text-rotator.js')); ?>"></script>
<!-- Lightbox.js -->
<script src="<?php echo e(asset('public/frontend/assets/lightbox/js/lightbox.min.js')); ?>"></script>
<!-- Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
<!-- Theme JavaScript Core -->
<script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/assets/html5shiv/html5shiv.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/assets/respond/respond.min.js')); ?>"></script>

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

</body>
</html><?php /**PATH D:\OSPanel\domains\sivkov\resources\views/layouts/app.blade.php ENDPATH**/ ?>