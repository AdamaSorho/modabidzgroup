<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="{{ route("home") }}"><img width="60" height="50" alt="Image" src="{{ $setting->logo ? url($setting->logo) : asset("img/modabidz-logo.jpeg") }}"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li>
                                <a href="{{ route("residence.home") }}">@lang("Accueil") <i class="fa fa-angle-down"></i></a>
                                {{--<ul>
                                    <li><a href="#">Travel</a>
                                        <ul>
                                            <li><a href="index.html">Home Slider</a></li>
                                            <li><a href="index-banner.html">Home Banner</a></li>
                                            <li><a href="index-video.html">Home Video</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-1.html">Travel Style 2</a></li>
                                    <li><a href="index-2.html">Travel Style 3</a></li>
                                    <li><a href="index-3.html">Travel style 4</a></li>
                                    <li><a href="index-4.html">Travel New</a></li>
                                </ul>--}}
                            </li>
                            <li>
                                <a href="{{ route("services") }}">@lang("Services") <i class="fa fa-angle-down"></i></a>
                            </li>
                            <li>
                                <a href="{{ route("news") }}">@lang("Actualités") <i class="fa fa-angle-down"></i></a>
                            </li>
                            <li>
                                <a href="{{ route("blog") }}">@lang("Blog") <i class="fa fa-angle-down"></i></a>
                            </li>
                            <li>
                                <a href="{{ route("videos") }}">@lang("Vidéos") <i class="fa fa-angle-down"></i></a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
