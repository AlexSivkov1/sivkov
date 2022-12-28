@extends('author.layouts.for_main_index_app')



@section('content')

<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>My Profile Categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/1.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>IT Development</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>120 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/2.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>Web Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>70 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/3.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>Illustration & Drawing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>55 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/4.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>Social Media</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>40 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/5.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>Photoshop</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>220 Courses</span>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            <div class="col-lg-4 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{asset('public/frontend/img/authors/6.jpg')}}"></div>
                    <div class="ci-text">
                        <h5>Cryptocurrencies</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <span>25 Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories section end -->

@endsection