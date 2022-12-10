@extends('admin.admin_layouts')

@section('admin_content')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Admin Section</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Edit Admin</h6>

                <p class="mg-b-20 mg-sm-b-30">Edit The Form</p>



                <form method="post" action="{{route('update.admin')}}">
                    @csrf
 {{--// обязательно input type hidden--}}
                    <input type="hidden" name="id" value="{{$user->id}}">

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label"> Name: <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter User Name" required value="{{$user->name}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone: <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone"
                                           placeholder="Enter phone" required value="{{$user->phone}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"
                                           placeholder="Enter email" required value="{{$user->email}}">
                                </div>
                            </div><!-- col-4 -->


                        </div><!-- row -->
                        <hr>
                        <br>
                        <br>

                        <div class="row">

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="category" value="1" {{ $user->category==1 ? "checked" : Null }}>
                                    <span>Category</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="coupon" value="1" {{ $user->coupon==1 ? "checked" : Null }}>
                                    <span>Coupon</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="product" value="1" {{ $user->product==1 ? "checked" : Null }}>
                                    <span>Product</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="blog" value="1" {{ $user->blog==1 ? "checked" : Null }}>
                                    <span>Blog</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="order" value="1" {{ $user->order==1 ? "checked" : Null }}>
                                    <span>Order</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="other" value="1" {{ $user->other==1 ? "checked" : Null }}>
                                    <span>Other</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="report" value="1"{{ $user->report==1 ? "checked" : Null }}>
                                    <span>Report</span>
                                </label>

                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="role" value="1" {{ $user->role==1 ? "checked" : Null }}>
                                    <span>Role</span>
                                </label>

                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="return" value="1" {{ $user->return==1 ? "checked" : Null }}>
                                    <span>Return</span>
                                </label>

                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="contact" value="1" {{ $user->contact==1 ? "checked" : Null }}>
                                    <span>Contact</span>
                                </label>

                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="comment" value="1" {{ $user->comment==1 ? "checked" : Null }}>
                                    <span>Comment</span>
                                </label>

                            </div>
                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="setting" value="1" {{ $user->setting==1 ? "checked" : Null }}>
                                    <span>Setting</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="stock" value="1" {{ $user->stock==1 ? "checked" : Null }}>
                                    <span>Stock</span>
                                </label>

                            </div>

                        </div>

                        <br><br>
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info mg-r-5">Update</button>

                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->


                </form>


            </div><!-- sl-pagebody -->

        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

    </div>

@endsection



