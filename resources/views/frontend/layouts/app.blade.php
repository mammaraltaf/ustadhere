<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="UstadHere.com">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Ustad Here- Electrician/Plumber at your doorstep</title>

    <!-- Favicon -->
    {{--  <link rel="shortcut icon" type="image/x-icon" href="{{asset("frontend/images/favicon.ico")}}" />--}}

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset("frontend/plugins/bootstrap/css/bootstrap.min.css")}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset("frontend/plugins/icofont/icofont.min.css")}}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{asset("frontend/plugins/slick-carousel/slick/slick.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/plugins/slick-carousel/slick/slick-theme.css")}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo/favicon.ico')}}">

    @yield('styles')
</head>

<body id="top">

@include('frontend.partials.header')


@yield('content')


<!-- footer Start -->
@include('frontend.partials.footer')

<!-- Main jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>

<!-- Bootstrap 4.3.2 -->
<script src="{{asset("frontend/plugins/bootstrap/js/popper.js")}}"></script>
<script src="{{asset("frontend/plugins/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("frontend/js/contact.js")}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
</body>
</html>
