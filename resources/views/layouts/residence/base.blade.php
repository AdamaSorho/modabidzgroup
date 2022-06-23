<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield("title", "Service Résidence")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("admin/images/logo1.png") }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("admin/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
{{--    @include("layouts.residence.hotel_style")--}}
    <link href="{{ asset("admin/css/hotel.css") }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset("admin/font/flaticon.css") }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield("styles")
</head>
<body>

<!-- Preloader -->
{{--<div id="preloader">
    <div id="status"></div>
</div>--}}
<!-- Preloader Ends -->

<!-- Header -->
@include("layouts.residence.header")
<!-- Header Ends -->

<!-- Navigation Bar -->
@include("layouts.residence.navigation")
<!-- Navigation Bar Ends -->

@yield("content")

<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- *Scripts* -->
<script src="{{ asset("admin/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("admin/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin/js/main.js") }}"></script>
<script src="{{ asset("admin/js/main-1.js") }}"></script>
<script src="{{ asset("admin/js/custom-countdown.js") }}"></script>
{{--<script src="{{ asset("admin/js/preloader.js") }}"></script>--}}
<script src="{{ asset("admin/js/custom-swiper2.js") }}"></script>

@yield("scripts")
</body>
</html>
