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
          <span class="text-white">Our services</span>
          <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our services</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
@php
    $services = \App\Models\Service::all();
    @endphp

<section class="section service-2">
	<div class="container">
		<div class="row">
            @foreach($services as $service)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="images/service/service-1.jpg" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{$service->service_name ?? ''}}</h4>
                        @php
                            $category = \App\Models\Category::where('id',$service->category_id)->first();
                            @endphp
						<p class="mb-4">{{$category->category_name ?? ''}}</p>
					</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="{{route('frontend.appointment')}}" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
