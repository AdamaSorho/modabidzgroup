@extends("layouts.app")

@section("title")
    {{ $blog->title  }}
@endsection

@section("content")
    @component("components.breadcrumb", [
        "title" => __("Actualité Détails"),
        "precedent" => __("Actualité"),
        "current" => __("Actualité"),
        "pathname" => "news",
    ]) @endcomponent

    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h1 class="mb-4 section-title">{{ $blog->title }}</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> {{ $blog->user->name }}</span>
                        <span class="mr-3"><i class="fa fa-folder text-primary"></i> {{ $blog->category->wording }}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{ url($blog->image) }}" alt="Image">
                    {!! $blog->content !!}
                </div>

                <!-- Related Post Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">@lang("Postes liées")</h3>
                    <div class="owl-carousel related-carousel position-relative">
                        @foreach($relatedBlogs as $related)
                            <div class="bg-light">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{ url($related->image) }}" alt="">
                                    <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                        <h4 class="text-center text-white font-weight-medium mb-3">{{ $related->title }}</h4>
                                        <div class="d-flex text-light">
                                            <small class="mr-2"><i class="fa fa-user text-secondary"></i> {{ $related->user->name }}</small>
                                            <small class="mr-2"><i class="fa fa-folder text-secondary"></i> {{ $related->category->wording }}</small>
                                        </div>
                                    </a>
                                </div>
                                {!! \Illuminate\Support\Str::limit($related->content, 300) !!}
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Related Post End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">

                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                @include("layouts.categories")
                <!-- Category End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{ url($blog->image) }}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Recent Post Start -->
                @include("layouts.recent_blogs")
                <!-- Recent Post End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->
@endsection
