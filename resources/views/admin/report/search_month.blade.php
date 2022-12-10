@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Orders Searched By Month</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h4> <span class="badge-success"> Total Amount of The Month: ${{ $total }} </span></h4>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p">Payment Type</th>
                            <th class="wd-15p">Transition ID</th>
                            <th class="wd-15p">SubTotal</th>
                            <th class="wd-20p">Shipping</th>
                            <th class="wd-20p">Vat</th>
                            <th class="wd-20p">Total</th>
                            <th class="wd-20p">Date</th>
                            <th class="wd-20p">Status</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $row)
                            <tr>

                                <td>{{$row->payment_type}}</td>
                                <td>{{ $row->blnc_transaction }}</td>
                                <td> ${{ $row->subtotal }} </td>
                                <td> ${{ $row->shipping }} </td>
                                <td> ${{ $row->vat }} </td>
                                <td> ${{ $row->total }} </td>
                                <td>  {{ $row->date }} </td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($row->status == 1)
                                        <span class="badge badge-info">Payment Accepted</span>

                                    @elseif($row->status == 2)
                                        <span class="badge badge-primary">In Progress</span>
                                    @elseif($row->status == 3)
                                        <span class="badge badge-success">Delivered</span>
                                    @else
                                        <span class="badge badge-danger">Cancel</span>
                                    @endif
                                </td>
                                {{--   <td><span class="badge badge-warning">Pending</span></td>--}}

                                <td><a href="{{URL::to('admin/view/order/'. $row->id)}}" class="btn btn-sm btn-info">View</a>
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



