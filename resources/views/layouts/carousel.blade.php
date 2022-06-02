<!-- Carousel Start -->
@if($carousels)
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($carousels as $carousel)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img class="w-100" src="{{ $carousel->image ? url($carousel->image) : asset("img/carousel-1.jpg") }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">{{ $carousel->title }}</h4>
                                <h1 class="display-3 text-white mb-md-4">{{ $carousel->subtitle }}</h1>
                                {{--                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">@lang("En savoir plus")</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
@endif
<!-- Carousel End -->
