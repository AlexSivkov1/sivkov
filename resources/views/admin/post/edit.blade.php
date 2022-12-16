@extends('admin.admin_layouts')

@section('admin_content')


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <span class="breadcrumb-item active">Update Post</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">
                    <a href="{{route('admin.posts')}}" class="btn btn-success btn-sm pull-right">All Posts</a>

                </h6>

                <p class="mg-b-20 mg-sm-b-30 ">Update Post Form</p>
                <form method="post" action="{{url('admin/post/update/nophoto/'.$post->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Post Name: <span
                                                class="tx-danger">*</span></label>
<input class="form-control" type="text" name="post_name" value="{{$post->post_name}}">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose category" name="category_id">
                                        <option label="Choose category"></option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" <?php if ($item->id == $post->category_id) { echo "selected"; } ?>
                                            >{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->



                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Post Description: <span class="tx-danger">*</span></label>
                                    <textarea class='form-control' name="post_description" id="summernote" cols="30" rows="10"> {{$post->post_description}}</textarea>

                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Post Tag: <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_tag" value="{{$post->post_tag}}" id="post_tag" data-role="tagsinput">
                                </div>
                                <hr>
                            </div><!-- col-4 -->


                        </div><!-- row -->
                        <hr>
                        <br>
                        <br>

                        <div class="row">

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="main_project_post" value="1" <?php if ($post->main_project_post == 1) {
                                        echo "checked";
                                    } ?> >
                                    <span>Main Project Post</span>
                                </label>

                            </div>

                            <div class="col-lg-4">
                                <label class="ckbox">
                                    <input type="checkbox" name="main_blog_post" value="1" <?php if ($post->main_blog_post == 1) {
                                        echo "checked";
                                    } ?> >
                                    <span>Main Blog Post</span>
                                </label>

                            </div>
                        </div>

                        <br><br>
                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Post</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- sl-pagebody -->
        </div><!-- sl-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update Images</h6>

                <form method="post" action="{{url('admin/post/update/photo/'.$post->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">

                            <label class="form-control-label">Image: <span
                                        class="tx-danger">*</span>
                            </label><br>
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image"
                                       onchange="readURL1(this)">
                                <span class="custom-file-control"></span>

                                <input type="hidden" name="old_image" value="{{$post->image}}">

                            </label>
                            <img src="#" id="one" alt>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <img src="{{URL::to($post->image)}}"  style="width: 80px; height: 80px">
                        </div>
                    </div><!-- row -->

                    <br>
                    <button type="submit" class="btn btn-sm btn-warning">Update Photo </button>
                </form>
            </div>

        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    {{--    <script type="text/javascript">
            $(document).ready(function(){
                $('select[name="category_id"]').on('change',function(){
                    var category_id = $(this).val();
                    if (category_id) {
                        $.ajax({
                            url: "{{ url('/get/subcategory/') }}/"+category_id,
                            type:"GET",
                            dataType:"json",
                            success:function(data) {
                                var d =$('select[name="subcategory_id"]').empty();
                                $.each(data, function(key, value){

                                    $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

                                });
                            }
                        });

                    }else{
                        alert('danger');
                    }

                });
            });

        </script>--}}

    <script type="text/javascript">
        function readURL(input){
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

