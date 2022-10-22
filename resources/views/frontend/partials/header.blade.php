<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@ustadhere.com</a></li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Rawalpindi / Islamabad </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+23-345-67890" >
                            <span>Call Now : </span>
                            <span class="h4">0347-5055405</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset("assets/logo/logo.png")}}" alt="" class="img-fluid" style="width:60%; height:30%;">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('frontend.home')}}">Home</a>
                    </li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('frontend.appointment')}}">Appointment Form</a></li>
                    @php
                        $services = \App\Models\Service::all();
                        @endphp

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('frontend.service')}}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            @foreach($services as $service)
                            <li><a class="dropdown-item" href="{{route('frontend.service')}}">{{$service->service_name ?? ''}}</a></li>
                            @endforeach
                        </ul>
                    </li>
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="dropdown03">--}}
{{--                            <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>--}}
{{--                            <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>--}}
{{--                            <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="dropdown05">--}}
{{--                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>--}}

{{--                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}">Contact</a></li>
                    <li class="nav-item ml-2"><a class="btn btn-warning" href="{{route('login')}}">Login</a></li>
{{--                    <li class="nav-item ml-2"><a class="btn btn-warning" style="white-space: nowrap;" href="{{route('registerProvider')}}">Register Technician</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
</header>
