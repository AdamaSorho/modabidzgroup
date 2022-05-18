@extends("layouts.app")

@section("title")
    @lang("Nos Actualités")
@endsection

@section("content")
    @component("components.breadcrumb", [
        "title" => __("Actualités"),
        "precedent" => __("Accueil"),
        "current" => __("Actualités"),
        "pathname" => "home",
    ]) @endcomponent
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-6 mb-2">
                            <div class="bg-light mb-4">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{ url($blog->image) }}" alt="">
                                    <a href="{{ route("news.detail", $blog->id) }}" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                        <h4 class="text-center text-white font-weight-medium mb-3">{{ $blog->title }}</h4>
                                        <div class="d-flex text-light">
                                            <small class="mr-2"><i class="fa fa-user text-secondary"></i> {{ $blog->user->name }}</small>
                                            <small class="mr-2"><i class="fa fa-folder text-secondary"></i> {{ $blog->category->wording }}</small>
                                            <small class="mr-2"><i class="fa fa-comments text-secondary"></i> {{ sizeof($blog->messages) }}</small>
                                        </div>
                                    </a>
                                </div>
                                {!! \Illuminate\Support\Str::limit($blog->content, 300) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    {{ $blogs->links() }}
                </div>
            </div>
            <!-- Blog Grid End -->

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
    <!-- Blog End -->
@endsection
