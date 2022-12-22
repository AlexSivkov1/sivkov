 @extends('author.posts_control_panel_app')

@section('content')

    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">




    <section class="intro text-center section-padding color-bg" id="about">
        <div class="container">
            <!-- WELCOME TEXT -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wp1 animated fadeInLeft">
                    <h1 class="arrow">A little <span>about</span> me</h1><!-- Headline -->
                    <!-- about / welcome text -->
                    <p>I am enough of an artist to draw freely upon my imagination. The point is that when I see a sunset or a <a href="#">waterfall</a> or something, for a split second it's so great, because for a little bit I'm out of my brain, and it's got nothing to do with me. I'm not trying to figure it out, you know what I mean? And I wonder if I can somehow find a way to maintain that mind stillness.</p>
                </div>
            </div>
        </div>
    </section>


    <style>
        .hero2 {
            background: url({{asset('public/frontend/img/postsBG.jpg')}}) right bottom no-repeat;
            background-size: contain;
            padding:110px 0 100px 0;
            height:auto;
            background-color: #FBFBFB;
        }
    </style>

<div class="hero2">
    <div class="row">
        <div class="col-md-8 col-md-offset-1 inner">
            <h1 class="animated fadeInDown">
                <span style="color:#E04343;">ВСЕ</span>ПО<br>
                <span>С<span style="color:#FFE800">ТЫ</span>ТУТ</span>
            </h1><!-- Title -->
            <h3 class="animated fadeInUp delay-05s"><span class="rotate" style="display: inline; opacity: 0.447475;">English Teacher's Profile</span></h3><!-- Text Rotator -->
        </div>
    </div>
</div>


    <div class="owl-carousel owl-theme">





        </div>








            <!-- PORTFOLIO ITEM 1 -->
            @foreach($posts as $item)
                <div class="col-md-4 col-sm-6">

                        <div class="img" style="height:540px ">

                                <a href="{{$item->image}}" data-lightbox="roadtrip" title="{{$item->post_name}}">
                                    <img class="grayscale" style="width: 400px" height="534px"
                                         src="{{$item->image}}" alt="{{$item->post_name}}"></a>



                        </div>



                </div>
        @endforeach

        <!-- PORTFOLIO ITEM END -->






    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
@endsection


