@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css">
@endsection

@section('content')
<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">TRUST US TO FIX IT RIGHT THE FIRST TIME</span>
                    <h1 class="mb-3 mt-3">Your most trusted Maintenance Company</h1>

                    <p class="mb-4 pr-5">We offer quality Home/Office maintenance services in Pakistan at affordable rates. Dismantling your Electrical worries - Complete Electrical Solutions for Residential & Commercials
                        .</p>
                    <div class="btn-container ">
                        <a href="{{route('frontend.appointment')}}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i class="icofont-simple-right ml-2  "></i></a>
                        <a href="tel:03475055405" class="btn btn-main btn-round-full">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-surgeon-alt"></i>
                        </div
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Fill out your details and we'll give you a call</p>
                        <a href="{{route('frontend.appointment')}}" class="btn btn-main btn-round-full">Make an Appointment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-ui-clock"></i>
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <br>
{{--                        <h1 style="text-align: center; color:#99ca3b; font-size:70px;" >24x7</h1>--}}
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Mon - Fri : <span>8 AM - 10 PM</span></li>
                            <li class="d-flex justify-content-between">Sat - Sun : <span>10 AM - 10 PM</span></li>
                        </ul>
                    </div>
s
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <span>Emergency Services</span>
                        <h4 class="mb-3"><a href="tel:03475055405">03475055405</a></h4>
                        <p>Peace of mind begins at home. Call the most trusted maintenance company in Islamabad/Rawalpindi today. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6">
                <div class="about-img">
                    <img src="{{asset("assets/moreImages/left1.jpg")}}" alt="" class="img-fluid">
                    <img src="{{asset("assets/moreImages/left2.jpg")}}" alt="" class="img-fluid mt-4">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="about-img mt-4 mt-lg-0">
                    <img src="{{asset("assets/moreImages/right.jpg")}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content pl-4 mt-4 mt-lg-0">
                    <h2 class="title-color">Services We Offer</h2>
                    <p class="mt-4 mb-5">To Maintain Your Home And Business, We Offer The Most Affordable And Highly Professional Services. We Help You Save Time And Money.</p>

                    <a href="{{url('services')}}" class="btn btn-main-2 btn-round-full btn-icon">Services<i class="icofont-simple-right ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section ">
    <div class="container">
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-doctor"></i>
                        <span class="h3">957</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">1028</span>+
                        <p>Services Completed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">15</span>+
                        <p>Expert Staff</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">2</span>
                        <p>Cities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Best maintenance company</h2>
                    <div class="divider mx-auto my-4"></div>
{{--                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>--}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-addons text-lg"></i>
                        <h4 class="mt-3 mb-3">Electrical services</h4>
                    </div>

                    <div class="content">
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
                    </div>
                </div>
            </div>

{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="service-item mb-4">--}}
{{--                    <div class="icon d-flex align-items-center">--}}
{{--                        <i class="icofont-tools-bag text-lg"></i>--}}
{{--                        <h4 class="mt-3 mb-3">AC Services & Repair</h4>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="service-item mb-4">--}}
{{--                    <div class="icon d-flex align-items-center">--}}
{{--                        <i class="icofont-tools text-lg"></i>--}}
{{--                        <h4 class="mt-3 mb-3">Home Appliances</h4>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-crutch text-lg"></i>
                        <h4 class="mt-3 mb-3">Plumbing services</h4>
                    </div>

                    <div class="content">
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-tools-alt-2 text-lg"></i>
                        <h4 class="mt-3 mb-3">Maintenance Contracts</h4>
                    </div>
                    <div class="content">
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-light-bulb text-lg"></i>
                        <h4 class="mt-3 mb-3">LED & Smart TV</h4>
                    </div>
                    <div class="content">
{{--                        <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<section class="section appoinment">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6 ">--}}
{{--                <div class="appoinment-content">--}}
{{--                    <img src="{{asset("assets/images/gImage_croped.png")}}" alt="" class="img-fluid">--}}
{{--                    <img src="{{asset("assets/moreImages/right.jpg")}}" alt="" class="img-fluid">--}}
{{--                    <div class="emergency">--}}
{{--                        <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><a style="color:white" href="tel:03475055405">0347 5055405</a></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-md-10 ">--}}
{{--                <div class="appoinment-wrap mt-5 mt-lg-0">--}}
{{--                    <h2 class="mb-2 title-color">Book appointment</h2>--}}
{{--                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                @include('admin.partials.sessionMessages')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <form id="appoinment-form" class="appoinment-form" method="POST" action="{{route('frontend.appointment.post')}}">--}}
{{--                        @csrf--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Select Category</label>--}}
{{--                                    <select class="form-control" name="category" id="category">--}}
{{--                                        <option>Choose Service Category</option>--}}
{{--                                        @foreach($categories as $category)--}}
{{--                                            <option id="{{$category->id}}" value="{{$category->id}}">{{$category->category_name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Select Service</label>--}}
{{--                                    <select class="form-control" name="service" id="service">--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Appointment Date/Time</label>--}}
{{--                                    <input class="form-control form-control-solid"--}}
{{--                                           name="dateTime" readable placeholder="Pick date/time"--}}
{{--                                           id="kt_datepicker_10"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Email</label>--}}
{{--                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Full Name</label>--}}
{{--                                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="form-label">Phone</label>--}}
{{--                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group-2 mb-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="" class="form-label">Address</label>--}}
{{--                                <input name="address" id="address" type="text" class="form-control" placeholder="Enter Address" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group-2 mb-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="" class="form-label">City</label>--}}
{{--                                <select class="form-control" id="city" name="city">--}}
{{--                                    <option value="Islamabad">Islamabad</option>--}}
{{--                                    <option value="Rawalpindi">Rawalpindi</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group-2 mb-4">--}}
{{--                            <label for="" class="form-label">Detail</label>--}}
{{--                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>--}}
{{--                        </div>--}}

{{--                        <input class="btn btn-main btn-round-full" type="submit" value="Make Appoinment" ></input>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="section testimonial-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>WE ARE BEST IN OUR WORK</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>See what our Happy Customers says</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 testimonial-wrap-2">
                @foreach($reviews as $review)
                    <div class="testimonial-block style-2  gray-bg">
                        <i class="icofont-quote-right"></i>

                        <div class="testimonial-thumb">
                            <img src="{{asset('upload/reviews/'.$review->image)}}" alt="" class="img-fluid">
                        </div>
                        @php
                            $service = \App\Models\Service::where('id',$review->service)->first();
                            @endphp
                        <div class="client-info ">
                            <h4>{{$review->customer_name ?? ''}}</h4>
                            <span>{{$service->service_name ?? ''}}</span>
                            <p>{{$review->review ?? ''}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{--<section class="section clients">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="section-title text-center">--}}
{{--                    <h2>Our Clients</h2>--}}
{{--                    <div class="divider mx-auto my-4"></div>--}}
{{--                    <p>We offer quality Home/Office maintenance services in Pakistan at affordable rates.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="row clients-logo">--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/1.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/2.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/3.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/4.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/5.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/6.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/3.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/4.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/5.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2">--}}
{{--                <div class="client-thumb">--}}
{{--                    <img src="{{asset("frontend/images/about/6.png")}}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $("#kt_datepicker_10").flatpickr({
            enableTime: true,
            minDate: "today",
            dateFormat: "Y-m-d H:i",
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                var categoryID = $(this).val();
                if(categoryID) {
                    $.ajax({
                        url: '/getService/'+categoryID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data)
                        {
                            if(data){
                                $('#service').empty();
                                $('#service').append('<option hidden>Choose Service</option>');
                                $.each(data, function(key, service){
                                    $('select[name="service"]').append('<option value="'+ service.id +'">' + service.service_name+ ' - RS. ' +service.service_price +'</option>');
                                });
                            }else{
                                $('#course').empty();
                            }
                        }
                    });
                }else{
                    $('#course').empty();
                }
            });
            var service = $('#service').find(":selected").text();
            console.log(service);
        });
    </script>
@endsection
