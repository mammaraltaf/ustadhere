@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css">
@endsection

@section('content')
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appointment</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for a Quick Service!</span>
              <h2 class="text-color mt-3">0347-5055405 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appointment</h2>
            <p class="mb-4">Enter your details, and we’ll get back to you with a FREE quote provided by skilled tradesmen who make it their business to understand exactly what you need.
                No guesswork, no jargon, no misquotes.</p>
               <div class="form-group">
                   <div class="row">
                       <div class="col-md-12">
                           @include('admin.partials.sessionMessages')
                       </div>
                   </div>
               </div>

               <form id="appoinment-form" class="appoinment-form" method="POST" action="{{route('frontend.appointment.post')}}">
                   @csrf
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Select Category</label>
                                <select class="form-control" name="category" id="category">
                                  <option>Choose Service Category</option>
                                    @foreach($categories as $category)
                                        <option id="{{$category->id}}" value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Select Service</label>
                                <select class="form-control" name="service" id="service">
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Appointment Date/Time</label>
                                <input class="form-control form-control-solid"
                                       name="dateTime" readable placeholder="Pick date/time"
                                       id="kt_datepicker_10"/>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Full Name</label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Phone</label>
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                   <div class="form-group-2 mb-4">
                       <div class="form-group">
                           <label for="" class="form-label">Address</label>
                           <input name="address" id="address" type="text" class="form-control" placeholder="Enter Complete Home/Office Address" required>
                   </div>
                   </div>
                    <div class="form-group-2 mb-4">
                        <label for="" class="form-label">Detail</label>
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <input class="btn btn-main btn-round-full" type="submit" value="Make Appointment" ></input>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
        });
    </script>
@endsection
