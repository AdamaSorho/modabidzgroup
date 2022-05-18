@extends("layouts.app")

@section("title")
{{ $blog->title  }}
@endsection

@section("content")
    @component("components.breadcrumb", [
        "title" => __("Blog Detail"),
        "precedent" => __("Blog"),
        "current" => __("Detail"),
        "pathname" => "blog",
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
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> {{ sizeof($blog->messages) }}</span>
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
                                            <small class="mr-2"><i class="fa fa-comments text-secondary"></i> {{ sizeof($related->messages) }}</small>
                                        </div>
                                    </a>
                                </div>
                                {!! \Illuminate\Support\Str::limit($related->content, 300) !!}
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Related Post End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">{{ sizeof($blog->messages) }} @lang("Commentaire(s)")</h3>
                    @foreach($blog->messages as $message)
                        <div class="media mb-4">
                            <img src="{{ asset("img/user.jpg") }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>{{ $message->name }} <small><i>{{ \Carbon\Carbon::parse($message->created_at, )->format("d M Y") }} @lang("à") {{ \Carbon\Carbon::parse($message->created_at)->format("H:i") }}</i></small></h6>
                                <p>{{ $message->body }}</p>
{{--                                <button class="btn btn-sm btn-light">Reply</button>--}}
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="media mb-4">
                        <img src="{{ asset("img/user.jpg") }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="{{ asset("img/user.jpg") }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light p-5">
                    @php
                        $infos = session("infos");
                    @endphp
                    <h3 class="font-weight-bold mb-4">@lang("Laisser un commentaire")</h3>
                    <form method="POST" action="{{ route("blog.message") }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <div class="form-group">
                            <label for="name">@lang("Nom") <span class="textred">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $infos["name"] ?? '' }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">@lang("Email") <span class="textred">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $infos["email"] ?? ''  }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="body">@lang("Commentaire") <span class="textred">*</span></label>
                            <textarea id="body" cols="30" rows="5" class="form-control" name="body"></textarea>
                            @if ($errors->has('body'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('body') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="@lang("Laisser un commentaire")" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Start -->
                {{--<div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                    <img class="rounded-circle bg-white shadow mx-auto mb-4" src="{{ asset("img/user.jpg") }}" style="width: 100px; height: 100px; padding: 12px;" alt="">
                    <h3 class="text-primary mb-3">John Doe</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>--}}
                <!-- Author End -->

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
