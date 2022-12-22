@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">

            <span class="breadcrumb-item active">BlogPost Section</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">BlogPost Update
                    <a href="{{route('admin.all.blogposts')}}" class="btn btn-success btn-sm pull-right">All BlogPosts</a>
                </h6>

                <form method="post" action="{{url('admin/update/blogpost/'.$blogpost->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">BlogPost Title<span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_title" value="{{$blogpost->post_title}}">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Blog Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose category" name="category_id">
                                        <option label="Choose category"></option>
                                        @foreach($blogpostscategories as $item)
                                            <option value="{{$item->id}}"
                                                <?php if ($item->id == $blogpost->category_id) {
                                                echo "selected";} ?>>
                                                {{$item->category_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">BlogPost Details: <span
                                                class="tx-danger">*</span></label>
                                    <textarea class='form-control' name="details" id="summernote">
                                        {!! $blogpost->details !!}
                                    </textarea>

                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-3">
                                <div class="form-group">

                                    <label class="form-control-label">BlogPost Image: <span
                                                class="tx-danger">*</span></label>
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL1(this)" >
                                        <br><br>
                                        <span class="custom-file-control"></span>
                                        <br>
                                        <img src="#" id="one" alt>
                                    </label>
                                </div>
                            </div><!-- col-3 -->

                            <div class="col-lg-3">
                                <div class="form-group">

                                    <label class="form-control-label">Old BlogPost Image: <span
                                                class="tx-danger">*</span></label>
                                    <label class="custom-file">



                                   {{--     <div class="img">
<a href="http://sivkov/public/frontend/img/portfolio/portfolio-05-large.jpg" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="http://sivkov/public/frontend/img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>


                                        </div>--}}




                                        <img src="{{URL::to($blogpost->post_image)}}" style="width: 130px; height: 80px;">
                                        <input type="hidden" name="old_image" value="{{$blogpost->post_image}}">
                                    </label>
                                </div>
                            </div><!-- col-3 -->

                        </div>


                    </div>

                    <br><br>
                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" type="submit">Submit Form</button>

                    </div><!-- form-layout-footer -->



                </form>


            </div><!-- card-pd -20 -->
        </div><!-- sl-mainpanel -->
    </div>
    <script type="text/javascript">
        function readURL1(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection


