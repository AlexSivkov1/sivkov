@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Posts Table</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Posts List
                    <a href="{{route('admin.add.post')}}" class="btn btn-sm btn-warning" style="float:right;"
                       data-target="#modaldemo3">Add New</a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Post Name</th>
                            <th class="wd-15p">Post Description</th>
                            <th class="wd-15p">Post Tag</th>
                            <th class="wd-15p">Main Project Post</th>
                            <th class="wd-15p">Main Blog Post</th>
                            <th class="wd-15p">Image</th>
                            <th class="wd-15p">Post Category Name</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{$item->post_name}}</td>

                                <td>{!! $item->post_description !!}</td>

                                <td>{{ $item->post_tag}}</td>

                                <td>
                            @if($item->main_project_post == 1)
                                        <span class="badge badge-success">Yes</span>
                            @else
                                        <span class="badge badge-danger">No</span>
                            @endif
                                </td>

                                <td>
                            @if ( $item->main_blog_post ==1)
                                        <span class="badge badge-success">Yes</span>
                            @else
                                        <span class="badge badge-danger">No</span>
                            @endif
                                </td>
                                <td><img src="{{ URL::to($item->image) }}" height="50px;" width="50px;" alt=""></td>
                                <td>{{ $item->category_name}}</td>


        <td><a href="{{URL::to('admin/post/edit/'. $item->id)}}" class="btn btn-sm btn-info" title="Edit"><i class="fa fa-edit"></i></a>

                <a href="{{URL::to('admin/post/delete/'. $item->id)}}" class="btn btn-sm btn-danger" title="Delete" id="delete"> <i class="fa fa-trash"></i></a>

          {{--      <a href="--}}{{--{{URL::to('view/product/'. $item->id)}}--}}{{--" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye"></i></a>--}}

                {{--@if ($item->status == 1)
                    <a href="{{URL::to('inactive/product/'. $item->id)}}" class="btn btn-sm btn-danger" title="Make it inactive"
                       ><i class="fa fa-thumbs-down"></i></a>

                @else
                    <a href="{{URL::to('active/product/'. $item->id)}}" class="btn btn-sm btn-info"
                       title="Make it active"
                        ><i class="fa fa-thumbs-up"></i></a>

                @endif--}}
        </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

            </div>
        </div>

    </div>
@endsection


