<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Sivkov's Admin Panel</title>

    <!-- vendor css -->








    <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}/" rel="stylesheet">
    <link href="{{asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
{{--Tags input cdn--}}
    <link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
{{--Data Table .css--}}
    <link href="{{asset('public/backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/select2/css/select2.min.css')}}"  rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">


    <link href="{{asset('public/backend/lib/medium-editor/medium-editor.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">




</head>

<body>


@guest

@else  {{--when logged in--}}
<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href="{{url('/')}}"><i class="icon ion-android-star-outline"></i> На Сайт </a></div>
<div class="sl-sideleft">


    <div class="sl-sideleft-menu">
        <a href="{{route('admin.dashboard')}}" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->



        {{--@if(Auth::user()->category == 1)--}}
            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Category</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('admin.categories')}}" class="nav-link">Category List</a></li>

            </ul>

        {{--@else--}}

        {{--@endif--}}

        {{--@if(Auth::user()->coupon == 1)--}}
     {{--   <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Coupons</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="--}}{{--{{route('admin.coupon')}}--}}{{--" class="nav-link">Coupon</a></li>

        </ul>--}}
        {{--@else--}}
       {{-- @endif--}}

        {{--@if(Auth::user()->product == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">Posts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.add.post')}}" class="nav-link">Add Post</a></li>
            <li class="nav-item"><a href="{{route('admin.posts')}}" class="nav-link">All Posts</a></li>
        </ul>
        {{--@else--}}
        {{--@endif--}}
        {{--@if(Auth::user()->order == 1)--}}
    {{--    <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">Orders</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="--}}{{--{{route('admin.neworder')}}--}}{{--" class="nav-link">New</a></li>
            <li class="nav-item"><a href="--}}{{--{{route('admin.accept.payment')}}--}}{{--" class="nav-link">Accepted Payment</a></li>
            <li class="nav-item"><a href="--}}{{--{{route('admin.cancel.payment')}}--}}{{--" class="nav-link">Canceled</a></li>
            <li class="nav-item"><a href="--}}{{--{{route('admin.progress.payment')}}--}}{{--" class="nav-link">In Progress</a></li>
            <li class="nav-item"><a href="--}}{{--{{route('admin.delivered.orders')}}--}}{{--" class="nav-link">Delivered</a></li>
        </ul>--}}
{{--@else--}}
    {{--@endif--}}

{{--@if(Auth::user()->blog == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">Blog</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.blog.categorylist')}}" class="nav-link">Blog Category List</a></li>
            <li class="nav-item"><a href="{{route('admin.add.blogpost')}}" class="nav-link">Add BlogPost</a></li>
            <li class="nav-item"><a href="{{route('admin.all.blogposts')}}" class="nav-link">All BlogPosts</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}
        {{--@if(Auth::user()->other == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Others</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.newsletter')}}" class="nav-link">Subscribers</a></li>
            <li class="nav-item"><a href="{{--{{route('admin.seo')}}--}}" class="nav-link">SEO Setting</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}
{{--@if(Auth::user()->report == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Reports</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{--{{route('today.order')}}--}} " class="nav-link">Today Order</a></li>
            <li class="nav-item"><a href="{{--{{route('today.delivery')}}--}} " class="nav-link">Today Delivery</a></li>
            <li class="nav-item"><a href="{{--{{route('this.month')}} --}}" class="nav-link">This Month</a></li>
            <li class="nav-item"><a href="{{--{{route('search.report')}}--}} " class="nav-link">Search Report</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}
       {{--@if(Auth::user()->role == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">User Role</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{--{{route('create.admin')}}--}} " class="nav-link">Create User</a></li>
            <li class="nav-item"><a href="{{--{{route('admin.all.user')}}--}} " class="nav-link">All Users</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}

        {{--@if(Auth::user()->return == 1)--}}
      {{--  <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Return Order</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->--}}
     {{--   <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="--}}{{--{{route('admin.return.request')}}--}}{{-- " class="nav-link">Return Request</a></li>
            <li class="nav-item"><a href="--}}{{--{{route('admin.all.returns')}}--}}{{-- " class="nav-link">All Requests</a></li>
        </ul>--}}
    {{--@else--}}
    {{--@endif--}}

        {{--@if(Auth::user()->stock == 1)--}}
          {{--  <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Products Stock</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="--}}{{--{{route('admin.product.stock')}}--}}{{--" class="nav-link">Stock</a></li>

            </ul>--}}
        {{--@else--}}
        {{--@endif--}}

        {{--@if(Auth::user()->contact == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Contact Message</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{--{{route('all.message')}}--}} " class="nav-link">All Messages</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}
        {{--@if(Auth::user()->comment == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Posts Comments</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{--{{route('today.order')}} --}}" class="nav-link">New Comments</a></li>
            <li class="nav-item"><a href="{{--{{route('today.delivery')}}--}} " class="nav-link">All Comments</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}

        {{--@if(Auth::user()->setting == 1)--}}
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Site Setting</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{--{{route('admin.site.setting')}}--}} " class="nav-link">Site Setting</a></li>
        </ul>
{{--@else--}}
    {{--@endif--}}



    </div><!-- sl-sideleft-menu -->

    <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="sl-header">
    <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a>
        </div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a>
        </div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">{{--{{Auth::user()->name}}--}}</span>
                    <img src="{{asset('public/backend/img/img3.jpg')}}" class="wd-32 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                        <li><a href="{{--{{route('admin.password.change')}}--}}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>



                        <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
                <i class="icon ion-ios-bell-outline"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger"></span>
                <!-- end: if statement -->
            </a>
        </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
</div><!-- sl-header -->
<!-- ########## END: HEAD PANEL ########## -->

@endguest

@yield('admin_content')

<script src="{{asset('public/backend/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('public/backend/lib/popper.js/popper.js')}}"></script>
<script src="{{asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>




<script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('public/backend/lib/select2/js/select2.min.js') }}"></script>




<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,

           /* paginate: true,
           buttons: true,*/
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page'
            }
        });

     /*   $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true

        });*/

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: 1 });

    });
</script>

<script src="{{asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('public/backend/lib/d3/d3.js')}}"></script>
<script src="{{asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('public/backend/lib/chart.js/Chart.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>


<script src="{{asset('public/backend/lib/medium-editor/medium-editor.js')}}"></script>
<script src="{{asset('public/backend/lib/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function(){
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');
        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>




<script>
    $(function(){
        'use strict';
        // Inline editor
        var editor = new MediumEditor('.editable');
        // Summernote editor
        $('#summernote1').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>

<script src="{{asset('public/backend/js/starlight.js')}}"></script>
<script src="{{asset('public/backend/js/ResizeSensor.js')}}"></script>
<script src="{{asset('public/backend/js/dashboard.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>




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

<script>
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Do you want to delete?",
            text: "Once Deleted, This will be Permanently Deleted!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
            } else {
                swal("Safe Data!");
    }
    });
    });
</script>





</body>
</html>
