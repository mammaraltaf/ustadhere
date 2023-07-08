@extends('admin.admin.app')
@section('pageTitle')
    Requests
@endsection
@section('content')
    <!--begin::Header-->
    <br>
    <div class="card-header pt-5">

        <h3 class="card-title">
            <span class="card-label fw-bolder fs-3 mb-1">Manage Requests</span>
        </h3>


    </div>
    <div class="card-toolbar">
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">

            {{--All Datatable--}}
            <table id="categoryTable" name="categoryTable" class="ui celled table allTable" style="width:100%">
                <thead>
                <tr>
                    <th>Category</th>
                    <th>Service</th>
                    <th>City</th>
                    <th>Appointment Date Time</th>
                    <th>Appointment Detail</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointmentProvider as $appointmentprov)
                    @php
                        $category = \App\Models\Category::where('id',$appointmentprov->appointment->category_id)->first();
                        $service = \App\Models\Service::where('id',intval($appointmentprov->appointment->service_id))->first();
                        @endphp
                    <tr>
                        <td>{{$category->category_name ?? ''}}</td>
                        <td>{{$service->service_name ?? ''}}</td>
                        <td>{{$appointmentprov->appointment->city}}</td>
                        <td>{{\Carbon\Carbon::parse($appointmentprov->appointment->appointmentDateTime)->format("l, F j, Y, g:i A")}}</td>
                        <td>{{$appointmentprov->appointment->appointmentDetail}}</td>
                        <td>
                            <a id="deleteBtn" data-toggle="modal" data-target=".modal1" data-id="{{$appointmentprov->id}}"
                               class="btn btn-success delete_btn btn-sm">Accept</a></td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Category</th>
                    <th>Service</th>
                    <th>City</th>
                    <th>Appointment Date Time</th>
                    <th>Appointment Detail</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="modal fade modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                {{--                {!! Form::open( array(--}}
                {{--                  'url' => route('admin.destroyCategory', array(), false),--}}
                {{--                  'method' => 'post',--}}
                {{--                  'role' => 'form' )) !!}--}}

                <form method="post" action="{{route('user.acceptAppointment')}}">
                    @csrf
                    <div class="modal-header" style="text-align: center;">
                        {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
                        {{--                            aria-hidden="true">&times;</span></button>--}}
                        <h2 class="modal-title" id="myModalLabel">Accept Appointment</h2>
                    </div>
                    <div class="modal-body" style="text-align: center;">

                        Are you sure you want to accept this appointment ?
                        <input type="hidden" name="id" class="user-delete" value=""/>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Accept</button>
                    </div>
                </form>
                {{--                {!! Form::close() !!}--}}

            </div>
        </div>
    </div>

    <!--end::Body-->
@endsection
@section('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script type="text/javascript">
        $('.delete_btn').click(function () {
            var a = $(this).data('id');
            $('.user-delete').val(a);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#categoryTable').DataTable();
        });
        $('body').on('click', '#categoryEdit', function () {
            var category_id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "{{url('/admin/edit-category/')}}"+'/'+category_id,
                success:function (response){
                    $('#category').val(response.category_name);
                    $('#categoryFormEdit').attr('action',"{{url('/admin/edit-category/')}}"+'/'+category_id);
                }

            });
        });

    </script>
@endsection
