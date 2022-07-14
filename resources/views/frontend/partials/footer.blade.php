<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="{{asset("assets/logo/logo.png")}}" alt="" class="img-fluid" style="width:60%; height:30%;">
                    </div>
                    <p>We offer quality Home/Office maintenance services in Pakistan at affordable rates. We can help you design the kitchen of your dreams and make changes to the bathrooms of your choice.

                    </p>

                    <ul class="list-inline footer-socials mt-4">
                        <li class="list-inline-item"><a href="https://www.facebook.com/UstadHere"><i class="icofont-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/UstadHere"><i class="icofont-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/UstadHere/"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Services</h4>
                    <div class="divider mb-4"></div>
                    @php
                        $services = \App\Models\Service::all();
                        @endphp
                    <ul class="list-unstyled footer-menu lh-35">
                        @foreach($services as $service)
                        <li><a href="{{route('frontend.service')}}">{{$service->service_name ?? ''}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Quick Links</h4>
                    <div class="divider mb-4"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('frontend.about')}}">About</a></li>
                        <li><a href="{{route('frontend.appointment')}}">Appointment Form</a></li>
                        <li><a href="{{route('frontend.service')}}">Services</a></li>
                        <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:+23-345-67890">support@ustadhere.com</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a href="tel:03475055405">0347-5055405</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
{{--            <div class="row align-items-center justify-content-between">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="copyright">--}}
{{--                        &copy; Copyright Reserved to <span class="text-color">ustadhere</span> by <a href="https://UstadHere.com/" target="_blank">UstadHere</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="subscribe-form text-lg-right mt-5 mt-lg-0">--}}
{{--                        <form action="#" class="subscribe">--}}
{{--                            <input type="text" class="form-control" placeholder="Your Email address">--}}
{{--                            <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>