<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield("title", "Bienvenue à Modabidz-group")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Modabidzgroup" name="keywords">
    <meta content="Modabidzgroup website" name="description">

    <!-- Favicon -->
    <link href="{{ asset("img/favicon.ico") }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
</head>

<body>
@include("layouts.header")

@yield("content")

@include("layouts.footer")

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary bg-secondary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("lib/easing/easing.min.js") }}"></script>
<script src="{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
<script src="{{ asset("lib/counterup/counterup.min.js") }}"></script>
<script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset("mail/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("mail/contact.js") }}"></script>

<!-- Template Javascript -->
<script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
