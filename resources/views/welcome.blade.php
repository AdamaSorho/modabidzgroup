@extends("layouts.app")

@section("content")

    @include("layouts.carousel")

    @php
        $setting = session("setting");
    @endphp

    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">@lang("Localisation")</h5>
                            <p class="m-0 text-white">{{ $setting->location ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">@lang("Email")</h5>
                            <p class="m-0 text-white">{{ $setting->email ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">@lang("Pour nous appeler")</h5>
                            <p class="m-0 text-white">{{ $setting->phone ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ $setting->image ? url($setting->image) : asset("img/about.jpg") }}" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">@lang("À propos de nous")</h6>
                    <h1 class="mb-4">{{ $setting->slogan ?? '' }}</h1>
                    <h5 class="font-weight-medium font-italic mb-4">{{ $setting->sub_slogan ?? '' }}</h5>
                    <p class="mb-2">{{ $setting->about_us ?? '' }}</p>
                    <div class="row">
                        @foreach($qualities as $quality)
                            <div class="col-sm-6 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary mr-2"></i>
                                    <p class="text-secondary font-weight-medium m-0">{{ $quality->wording }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">@lang("Nos Services")</h6>
            <h1 class="display-4 text-center mb-5">@lang("Ce que nous vous offrons")</h1>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                                @if($service->image)
                                    <a href="{{ url($service->image) }}">
                                        <img src="{{ url($service->image) }}" style="border-radius: 50%;" width="100" height="100" alt="{{ $service->wording }}">
                                    </a>
                                @else
                                    <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                                @endif
                            </div>
                            <h4 class="font-weight-bold m-0">{{ $service->wording }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">@lang("")</h6>
                    <h1 class="mb-4">@lang("Pourquoi nous choisir ?")</h1>
                    <p>{{ $setting->choose_us ?? '' }}</p>
                    <div class="row">
                        @foreach($experiences as $experience)
                            <div class="col-sm-6 mb-4">
                                <h1 class="text-secondary" data-toggle="counter-up">{{ $experience->number }}</h1>
                                <h5 class="font-weight-bold">{{ $experience->wording }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if($betterExperience)
                    <div class="col-lg-5">
                        <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                            <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                            <h1 class="display-1 text-white mb-3">{{ $betterExperience->number ?? '' }}</h1>
                            <h1 class="text-white m-0">{{ $betterExperience->wording ?? '' }}</h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Working Process Start -->
    {{--<div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Working Process</h6>
            <h1 class="display-4 text-center mb-5">How We Work</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">4</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- Working Process End -->


    <!-- Pricing Plan Start -->
    {{--<div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Pricing Plan</h6>
            <h1 class="display-4 text-center mb-5">The Best Price</h1>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Basic</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap 4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4">Signup Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-primary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Standard</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap 4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4">Signup Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Premium</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap 4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4">Signup Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    @if($testimonies)
        <div class="container-fluid py-5">
            <div class="container">
                <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">@lang("Témoignages")</h6>
                <h1 class="display-4 text-center mb-5">@lang("Ce que nos clients disent")</h1>
                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonies as $testimony)
                        <div class="testimonial-item">
                            <img class="position-relative rounded-circle bg-white shadow mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                            <div class="bg-light text-center p-4 pt-0">
                                <h5 class="font-weight-medium mt-5">{{ $testimony->name }}</h5>
                                <p class="text-muted font-italic">{{ $testimony->profession }}</p>
                                <p class="m-0">{{ $testimony->text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @if($recentBlogs)
        <div class="container-fluid mt-5 pb-2">
            <div class="container">
                <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">@lang("Notre Blog")</h6>
                <h1 class="display-4 text-center mb-5">@lang("Récentes publications du blog")</h1>
                <div class="row">
                    @foreach($recentBlogs as $recent)
                        <div class="col-lg-4 mb-2">
                            <div class="shadow mb-4">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{ url($recent->image) }}" alt="">
                                    <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                        <h4 class="text-center text-white font-weight-medium mb-3">{{ $recent->title }}</h4>
                                        <div class="d-flex text-light">
                                            <small class="mr-2"><i class="fa fa-user text-secondary"></i> {{ $recent->user->name }}</small>
                                            <small class="mr-2"><i class="fa fa-folder text-secondary"></i> {{ $recent->category->wording }}</small>
                                            <small class="mr-2"><i class="fa fa-comments text-secondary"></i> {{ sizeof($recent->messages) }}</small>
                                        </div>
                                    </a>
                                </div>
                                {!! \Illuminate\Support\Str::limit($recent->content, 300) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Blog End -->
@endsection
