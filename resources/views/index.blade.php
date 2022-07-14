@extends('admin.admin.app')
@section('pageTitle') Home @endsection
@section('content')
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Dashboard</span>
        </h3>

    </div>
    <!--end::Header-->
    @php

        @endphp
    <!--begin::Body-->
    <div class="card-body py-3">
        <div class="tab-content">
            <!--begin::Tap pane-->
            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            {{--Count of All appointments--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">All Appointments</h1>
                                                <h2 class="mb-0 number-font" style="color:red">{{$allAppointments ?? ''}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--Count of pending appointments--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Pending</h1>
                                                <h2 class="mb-0 number-font" style="color:red">{{$pendingAppointments ?? ''}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="leadschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--Count of completed appointments--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Completed</h1>
                                                <h2 class="mb-0 number-font" style="color:red">{{$completedAppointments ?? ''}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="profitchart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <br>
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Contact Form Data</span>
                    </h3>

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            {{--Count of All appointments--}}
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-12">
                                <div class="card overflow-hidden">
                                    <div class="card-body" style="background-color: lavender;">
                                        <div class="d-flex">
                                            <div class="mt-2">
                                                <h1 class="">Contact form</h1>
                                                <h2 class="mb-0 number-font" style="color:red">{{$contactFormData ?? ''}}</h2>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="chart-wrapper mt-1">
                                                    <canvas id="saleschart"
                                                            class="h-8 w-9 chart-dropshadow"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Tap pane-->

        </div>
    </div>
    <!--end::Body-->
@endsection
@section('script')
@endsection
