<!-- Topbar Start -->
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="">@lang("FAQs")</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="">@lang("Aide")</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="">@lang("Support")</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="{{ $setting->facebook ?? '#' }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="{{ $setting->twitter ?? '#' }}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="{{ $setting->linkedin ?? '#' }}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="{{ $setting->instagram ?? '#' }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="{{ $setting->youtube ?? '#' }}">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-white float-right pl-5" href="{{ route("setLocale", 'en') }}" title="{{ __("Anglais") }}">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <a class="text-white float-right px-3" href="{{ route("setLocale", 'fr') }}" title="{{ __("Français") }}">
                        <i class="flag-icon flag-icon-fr"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route("home") }}" class="navbar-brand">
                <img src="{{ $setting ? url($setting->logo) : asset("img/modabidz-logo.jpeg") }}" width="250" alt="ModabidZ Group">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route("home") }}" class="nav-item nav-link active">@lang("Accueil")</a>
                    <a href="{{ route("services") }}" class="nav-item nav-link">@lang("Services")</a>
                    <a href="{{ route("news") }}" class="nav-item nav-link">@lang("Actualités")</a>
                    <a href="{{ route("blog") }}" class="nav-item nav-link">@lang("Blog")</a>
                    <a href="{{ route("videos") }}" class="nav-item nav-link">@lang("Vidéos")</a>
                    {{--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>--}}
                    <a href="{{ route("contact") }}" class="nav-item nav-link">@lang("Contact")</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
