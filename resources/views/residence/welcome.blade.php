@extends("layouts.residence.base")

@section("styles")
    <link href="{{ asset("admin/css/plugin.css") }}" rel="stylesheet" type="text/css">
@endsection

    @section("content")

    <!-- Banner start -->
    @include("layouts.residence.banner")
    <!-- Banner Ends -->

    @include('sweetalert::alert')

    <!-- Popular Packages -->
    <section class="popular-packages">
        <div class="container">
            <div class="section-title">
                <h2>@lang("<span>Chambres</span> Populaires")</h2>
                <p>
                    Des chambres haut standing, des services personnalisés de classe internationale à votre disposition.
                </p>
            </div>
            <div class="row room-slider slider-button">
                @foreach($rooms as $room)
                    <div class="col-sm-4">
                        <div class="package-item">
                            <img src="{{ $room->photos ? url($room->photos[0]->image) : asset("admin/images/hotel/room-1.jpg") }}" alt="Image">
                            <div class="package-content">
                                <h5>@lang("À partir :") <span>{{ $room->amount }} F CFA</span> / @lang("JOUR") </h5>
                                <h3><a href="{{ route("residence.room.detail", $room->id) }}">{{ $room->name }}</a></h3>
                                <p>{!! \Illuminate\Support\Str::limit($room->description) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Popular Packages -->
    {{--<section class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="package-item">
                        <div class="package-content">
                            <h3>Private <span>Pool Suite</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            <a href="hotel-detail.html" class="btn-red mar-top-20">check availability</a>
                        </div>
                        <img src="images/hotel/services2.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="package-item package-item1">
                        <img src="images/hotel/services1.jpg" alt="Image">
                        <div class="package-content">
                            <h3><span>Sea</span> View Suite</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            <a href="hotel-detail.html" class="btn-red mar-top-20">check availability</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sml-services mar-top-20">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="package-item">
                            <img src="images/hotel/services4.jpg" alt="Image">
                            <div class="package-position">
                                <h3 class="mar-0">Spa</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="package-item">
                            <img src="images/hotel/services3.jpg" alt="Image">
                            <div class="package-position">
                                <h3 class="mar-0">Restaurant</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="package-item">
                            <img src="images/hotel/services5.jpg" alt="Image">
                            <div class="package-position">
                                <h3 class="mar-0">Activities</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Popular Packages Ends -->


    <!-- Trip Ad -->
    {{--<section class="cta">
        <div class="container">
            <div class="cta-content text-center">
                <div class="cta-title">
                    <h2 class="white text-uppercase">Relax And Enjoy Your Holiday @Thailand Trip</h2>
                    <h3 class="white">Luxury Hotel & Best Resort </h3>
                </div>
                <div class="cta-btn">
                    <a href="hotel-detail.html" class="btn-red btn-red">BOOK NOW</a>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Trip Ad Ends -->

    <!-- Deals On Sale -->
    {{--<section class="deals-on-sale">
        <div class="container">
            <div class="section-title">
                <h2>Awesome Places</h2>
                <p>THE BEST VALUE UNDER THE SUN</p>
            </div>
            <div class="row sale-slider slider-button">
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                            <img src="images/sale1.jpg" alt="Image">
                        </div>
                        <div class="sale-content">
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="hotel-detail.html" class="white">Surfing Bahamas</a></h3>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                            <img src="images/sale2.jpg" alt="Image">
                        </div>
                        <div class="sale-content">
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="hotel-detail.html" class="white">Mountain City</a></h3>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                            <img src="images/sale3.jpg" alt="Image">
                        </div>
                        <div class="sale-content">
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="hotel-detail.html" class="white">Seneora Beach</a></h3>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                            <img src="images/sale4.jpg" alt="Image">
                        </div>
                        <div class="sale-content">
                            <div class="deal-rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="hotel-detail.html" class="white">Beach Market</a></h3>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Deals On Sale Ends -->


    <!-- Testimonials -->
    {{--<section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="testimonial-inner">
                        <div class="testimonial-title text-center mar-bottom-35">
                            <h3>CUSTOMER <span>REVIEWS</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- Paradise Slider -->
                        <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel">
                            <!-- Wrapper For Slides -->
                            <div class="carousel-inner" role="listbox">

                                <!-- First Slide -->
                                <div class="item active">

                                    <!-- Text Layer -->
                                    <div class="testimonial_095_slide">
                                        <div class="testimonial-image">
                                            <img src="images/testemonial2.jpg" alt="Image">
                                        </div>
                                        <div class="testi-heading text-center">
                                            <h4 class="mar-top-10"><a href="#">Susan Doe, Houston</a></h4>
                                            <h5><a href="#">Adventurer</a></h5>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                    </div> <!-- /Text Layer -->
                                </div> <!-- /item -->
                                <!-- End of First Slide -->

                                <!-- Second Slide -->
                                <div class="item">
                                    <!-- Text Layer -->
                                    <div class="testimonial_095_slide">
                                        <div class="testimonial-image">
                                            <img src="images/testemonial2.jpg" alt="Image">
                                        </div>
                                        <div class="testi-heading text-center">
                                            <h4 class="mar-top-10"><a href="#">Susan Doe, Houston</a></h4>
                                            <h5><a href="#">Adventurer</a></h5>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                    </div> <!-- /Text Layer -->
                                </div> <!-- /item -->
                                <!-- End of Second Slide -->

                                <!-- Third Slide -->
                                <div class="item">
                                    <!-- Text Layer -->
                                    <div class="testimonial_095_slide">
                                        <div class="testimonial-image">
                                            <img src="images/testemonial2.jpg" alt="Image">
                                        </div>
                                        <div class="testi-heading text-center">
                                            <h4 class="mar-top-10"><a href="#">Susan Doe, Houston</a></h4>
                                            <h5><a href="#">Adventurer</a></h5>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur adipiscing luctus massa nteger ut purus ac augue commodo commodo unc nec mi eu justo tempor consectetuer tiam.</p>
                                        <div class="deal-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-o"></span>
                                            <span class="fa fa-star-o"></span>
                                        </div>
                                    </div> <!-- /Text Layer -->
                                </div> <!-- /item -->
                                <!-- End of Third Slide -->

                            </div> <!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                            <a class="left carousel-control" href="#testimonial_095" role="button" data-slide="prev">
                                <span class="fa fa-chevron-left"></span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#testimonial_095" role="button" data-slide="next">
                                <span class="fa fa-chevron-right"></span>
                            </a>

                        </div> <!-- End Paradise Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Testimonials Ends -->

    <!-- Countdown -->
    {{--<section class="countdown-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="countdown-title">
                        <h3 class="white">Hot offer</h3>
                        <h2 class="white">GET <span>40% DISCOUNT</span> ONLY IN SUMMER VOCATIONS</h2>
                        <a href="" class="btn-red mar-top-15">Book Now</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="countdown countdown-container">
                        <h3 class="white">Limited offer</h3>
                        <p id="demo"></p>
                    </div><!-- /.countdown-wrapper -->
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Countdown Ends -->

    <!-- Blog -->
    {{--<section class="blog">
        <div class="container">
            <div class="section-title">
                <h2>Latest <span>News</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt .</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog1.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog2.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog3.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <h3><a href="blog-detail.html">Electric Feel And Of Other Things</a></h3>
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> 12 May 2019</p></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Blog Ends -->

    <!-- Trusted Partners -->
    {{--<section class="trusted-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <div class="partners-title">
                        <h3>Our <span>Partners</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul class="partners-logo partners-slider">
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Trusted Partners Ends -->
@endsection

@section("scripts")
    <script src="{{ asset("admin/js/plugin.js") }}"></script>
@endsection
