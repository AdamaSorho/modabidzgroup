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
    <link href="{{ asset("admin/css/hotel.css") }}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{ asset("admin/font/flaticon.css") }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset("admin/css/plugin.css") }}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->

<!-- Header -->
@include("layouts.residence.header")
<!-- Header Ends -->

<!-- Navigation Bar -->
@include("layouts.residence.navigation")
<!-- Navigation Bar Ends -->

@yield("content")

<!-- Footer -->
{{--<footer>
    <div class="footer-upper">
        <div class="container">
            <div class="newsletter text-center">
                <div class="section-title section-title-white text-center">
                    <h2>Newsletter Signup</h2>
                    <div class="section-icon section-icon-white">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Subscribe to our weekly newsletter to get updated on our latest deals</p>
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search">
                        <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</span></a>
                    </div>
                </form>
            </div>
            <div class="footer-links">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="footer-about footer-margin">
                            <div class="about-logo">
                                <img src="images/Yatra-white.png" alt="Image">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <div class="about-location">
                                <ul>
                                    <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
                                    <li><i class="flaticon-phone-call"></i> (012)-345-6789</li>
                                    <li><i class="flaticon-mail"></i> tourntravel@testmail.com</li>
                                </ul>
                            </div>
                            <div class="footer-social-links">
                                <ul>
                                    <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-links-list footer-margin">
                            <h3>Browse Tour</h3>
                            <ul>
                                <li><a href="#">Cyclades <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">North Ionian <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">Sporades <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">View all Destinations <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">View all Yatchs <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="#">View all Cruises <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-recent-post footer-margin">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li>
                                    <div class="recent-post-item">
                                        <div class="recent-post-image">
                                            <img src="images/bucket1.jpg" alt="Image">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">A trip to heaven</a></h4>
                                            <p>June 17, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-item">
                                        <div class="recent-post-image">
                                            <img src="images/bucket2.jpg" alt="Image">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">Diving in Atlantic</a></h4>
                                            <p>June 17, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent-post-item">
                                        <div class="recent-post-image">
                                            <img src="images/bucket3.jpg" alt="Image">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">Travellers History</a></h4>
                                            <p>June 17, 2018</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-links-list">
                            <div class="footer-instagram">
                                <h3>Instagram</h3>
                                <ul>
                                    <li><img src="images/insta1.jpg" alt="Image"></li>
                                    <li><img src="images/insta2.jpg" alt="Image"></li>
                                    <li><img src="images/insta3.jpg" alt="Image"></li>
                                    <li><img src="images/insta4.jpg" alt="Image"></li>
                                    <li><img src="images/insta5.jpg" alt="Image"></li>
                                    <li><img src="images/insta6.jpg" alt="Image"></li>
                                    <li><img src="images/insta7.jpg" alt="Image"></li>
                                    <li><img src="images/insta8.jpg" alt="Image"></li>
                                    <li><img src="images/insta9.jpg" alt="Image"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="copyright-content">
                        <p>2018 <i class="fa fa-copyright" aria-hidden="true"></i> Yatra by <a href="https://www.cyclonethemes.com" target="_blank">Cyclone Themes</a></p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="payment-content">
                        <ul>
                            <li>We Accept</li>
                            <li>
                                <img src="images/payment1.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment2.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment3.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment4.png" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>--}}
<!-- Footer Ends -->

<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- *Scripts* -->
<script src="{{ asset("admin/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ asset("admin/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin/js/plugin.js") }}"></script>
<script src="{{ asset("admin/js/main.js") }}"></script>
<script src="{{ asset("admin/js/main-1.js") }}"></script>
<script src="{{ asset("admin/js/custom-countdown.js") }}"></script>
<script src="{{ asset("admin/js/preloader.js") }}"></script>
<script src="{{ asset("admin/js/custom-swiper2.js") }}"></script>
</body>
</html>
