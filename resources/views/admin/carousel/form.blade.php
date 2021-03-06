@extends("layouts.admin_base")

@section("title")
    Ajouter un slide
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
                <form role="form" method="post" action="{{ route("admin.carousel.store") }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$carousel->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter un slide</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="title_fr">Titre (Français)</label>
                                        <input type="text" name="title_fr" id="title_fr" value="{{ $carousel->getTranslation("title", "fr") }}">
                                        @if ($errors->has('title_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('title_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title_en">Titre (Anglais)</label>
                                        <input type="text" name="title_en" id="title_en" value="{{ $carousel->getTranslation("title", "en") }}">
                                        @if ($errors->has('title_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('title_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subtitle_fr">Sous-titre (Français)</label>
                                        <input type="text" name="subtitle_fr" id="subtitle_fr" value="{{ $carousel->getTranslation("subtitle", "fr") }}">
                                        @if ($errors->has('subtitle_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('subtitle_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subtitle_en">Sous-titre (Anglais)</label>
                                        <input type="text" name="subtitle_en" id="subtitle_en" value="{{ $carousel->getTranslation("subtitle", "en") }}">
                                        @if ($errors->has('subtitle_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('subtitle_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has("image") ? " has-error": "" }}">
                                            <label for="image">Image <strong class="textred">* [Taille 1366x800]</strong></label>
                                            <input type="file" id="image" name="image" value="{{ $carousel->image }}">
                                            @if ($errors->has('image'))
                                                <span class="help-block textred">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        @if($carousel->image)
                                            <a href="{{url($carousel->image)}}">
                                                <img src="{{url($carousel->image)}}" width="100px" height="100px">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="is_active">Activer</label>
                                        <input id="is_active" type="checkbox" name="is_active" @if($carousel->is_active) checked @endif value="1">
                                        @if ($errors->has('is_active'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('is_active') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="type">@lang("Type")</label>
                                        <select name="type" id="type">
                                            <option value="1" @if($carousel->type == 1) selected @endif>@lang("Accueil")</option>
                                            <option value="2" @if($carousel->type == 2) selected @endif>@lang("Résidence")</option>
                                        </select>
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
