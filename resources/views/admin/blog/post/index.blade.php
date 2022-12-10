@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Posts Lists</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40 col-md-12">
                <h6 class="card-body-title">Posts List
                    <a href="{{route('add.blogpost')}}" class="btn btn-sm btn-warning" style="float:right;"
                        >Add New Post</a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Post Title</th>
                            <th class="wd-15p">Post Category</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $item)
                            <tr>
                                <td>{{$item->post_title_en}}</td>
                                <td>{{ $item->category_name_en }}</td>
                                <td><img src="{{URL::to($item->post_image)}}" style="height: 50px; width: 50px;" > </td>
                                <td><a href="{{URL::to('edit/post/'. $item->id)}}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{URL::to('delete/post/'. $item->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

            </div>
        </div>

    </div>



    {{--САМО МОДАЛЬНОЕ ОКНО--}}
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Post Add</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form method="post" action="{{route('store.blog.category')}}">
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name English</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Category" name="category_name_en">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name Russian</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Category" name="category_name_ru">
                        </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit Changes</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

@endsection
