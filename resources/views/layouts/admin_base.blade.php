<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title", "Bienvenue sur le tableau de bord de ModabidzGroup")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("admin/images/logo1.png") }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("admin/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ asset("admin/css/style.css") }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset("admin/font/flaticon.css") }}" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="{{ asset("admin/css/dashboard.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("admin/css/icons.css") }}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield("styles")
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->

<!-- start Container Wrapper -->
<div id="container-wrapper">
    <!-- Dashboard -->
    <div id="dashboard">

        @include("layouts.admin_header")

        @include("layouts.admin_aside")

        @yield("content")

        @include("layouts.admin_footer")
    </div>
    <!-- Dashboard / End -->
</div>
<!-- end Container Wrapper -->


<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- *Scripts* -->
<script src="{{ asset("admin/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("admin/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin/js/preloader.js") }}"></script>
<script src="{{ asset("admin/js/main.js") }}"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="{{ asset("admin/js/chart.js") }}"></script>
<script src="{{ asset("admin/js/dashboard-custom.js") }}"></script>
<script src="{{ asset("admin/js/jpanelmenu.min.js") }}"></script>
<script src="{{ asset("admin/js/counterup.min.js") }}"></script>

@yield("scripts")
</body>
</html>
