@extends("layouts.admin_base")

@section("title")
    Créer un blog
@endsection

@section("content")
    <div class="dashboard-content">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            <!-- Listings -->
            <div class="col-lg-12 col-sm-12">
                <form role="form" method="post" action="{{ route("admin.blog.store") }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$blog->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Créer un blog</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="title_fr">Titre (Français)</label>
                                        <input type="text" name="title_fr" id="title_fr" value="{{ $blog->getTranslation("title", "fr") }}">
                                        @if ($errors->has('title_fr'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('title_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title_en">Libellé (Anglais)</label>
                                        <input type="text" name="title_en" id="title_en" value="{{ $blog->getTranslation("title", "en") }}">
                                        @if ($errors->has('title_en'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('title_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="blog_category_id">@lang("Catégorie")</label>
                                        <select class="chosen-select-no-single" name="blog_category_id" id="blog_category_id">
                                            <option value="">@lang("Choisir une catégorie")</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($category->id == $blog->blog_category_id) selected @endif>{{ $category->wording }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has("image") ? " has-error": "" }}">
                                            <label for="image">Image <strong class="textred">* [Taille 400x250]</strong></label>
                                            <input type="file"
                                                   id="image" name="image"
                                                   value="{{ $blog->image }}" required>
                                            @if ($errors->has('image'))
                                                <span class="help-block text-red">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        @if($blog->image)
                                            <a href="{{url($blog->image)}}">
                                                <img src="{{url($blog->image)}}" width="100px" height="100px">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="type">@lang("Type")</label>
                                        <select name="type" id="type">
                                            <option value="1">@lang("Blog")</option>
                                            <option value="2">@lang("Actualité")</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="content_fr">Contenu (Français)</label>
                                        <textarea name="content_fr" id="content_fr" >
                                            {!! $blog->getTranslation("content", "fr") !!}
                                        </textarea>
                                        @if ($errors->has('content_fr'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('content_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <label for="content_en">Contenu (Anglais)</label>
                                        <textarea name="content_en" id="content_en" >
                                            {!! $blog->getTranslation("content", "en") !!}
                                        </textarea>
                                        @if ($errors->has('content_en'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('content_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Row / End -->
                            </div>
                        </div>
                        <!-- Section / End -->
                        <button type="submit" class="button preview">@lang("Enregistrer") <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{ asset("js/upload_image_cke.js") }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        let _token = $("input[name='_token']").val();
        ClassicEditor
            .create( document.querySelector( '#content_fr' ), {
                    extraPlugins: [SimpleUploadAdapterPlugin],
                    headers: {
                        token: _token,
                    }
                }
            )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#content_en' ), {
                extraPlugins: [SimpleUploadAdapterPlugin],
                headers: {
                    token: _token,
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
