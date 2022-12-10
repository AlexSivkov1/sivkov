@extends('admin.admin_layouts')
@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Blog Section</span>
        </nav>

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">New Post Add
                    <a href="{{route('all.blogpost')}}" class="btn btn-success btn-sm pull-right">All Posts</a>

                </h6>

                <p class="mg-b-20 mg-sm-b-30">New Post Add Form</p>



                <form method="post" action="{{route('store.post_image')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Post Title (English): <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_title_en"   placeholder="Post Title in English">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Post Title (Russian): <span
                                                class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="post_title_ru"
                                           placeholder="Post Title in Russian">
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Blog Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose category" name="category_id">
                                        <option label="Choose category"></option>
                                        @foreach($blogcategory as $item)
                            <option value="{{$item->id}}">{{$item->category_name_en}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Product Details (English): <span
                                                class="tx-danger">*</span></label>
                                    <textarea class='form-control' name="details_en" id="summernote" cols="30" rows="10"></textarea>

                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Product Details (Russian): <span
                                                class="tx-danger">*</span></label>
                                    <textarea class='form-control' name="details_ru" id="summernote1" cols="30" rows="10"></textarea>

                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-3">
                                <div class="form-group">

                                    <label class="form-control-label">Post Image: <span
                                                class="tx-danger">*</span></label>
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="post_image" onchange="readURL1(this)" >
                                        <br><br>
                                        <span class="custom-file-control"></span>
                                        <br>
                                        <img src="#" id="one" alt>
                                    </label>
                                </div>
                            </div><!-- col-5 -->

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

