@extends("layouts.admin_base")

@section("title")
    Ajouter une vidéo
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
                <form role="form" method="post" action="{{ route("admin.video.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$video->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter une vidéo</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="title_fr">Titre (Français)</label>
                                        <input type="text" name="title_fr" id="title_fr" value="{{ $video->getTranslation("title", "fr") }}">
                                        @if ($errors->has('title_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('title_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title_en">Titre (Anglais)</label>
                                        <input type="text" name="title_en" id="title_en" value="{{ $video->getTranslation("title", "en") }}">
                                        @if ($errors->has('title_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('title_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="video_category_id">@lang("Catégorie")</label>
                                        <select name="video_category_id" id="video_category_id">
                                            <option value="">@lang("Choisir une catégorie")</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($category->id == $video->video_category_id) selected @endif>{{ $category->wording }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="frame">@lang("Lien de la vidéo") (Frame)</label>
                                        <input type="text" name="frame" id="frame" value="{{ $video->frame }}">
                                    </div>
                                    <div class="col-md-6">
                                        {!! $video->frame !!}
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
