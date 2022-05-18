@extends("layouts.admin_base")

@section("title")
    Ajouter un témoignage
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
                <form role="form" method="post" action="{{ route("admin.testimony.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$testimony->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter un témoignage</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-4">
                                        <label for="name">Nom du client</label>
                                        <input type="text" name="name" id="name" value="{{ $testimony->name }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="profession_fr">Profession (Français)</label>
                                        <input type="text" name="profession_fr" id="profession_fr" value="{{ $testimony->getTranslation("profession", "fr") }}">
                                        @if ($errors->has('profession_fr'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('profession_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="profession_en">Profession (Anglais)</label>
                                        <input type="text" name="profession_en" id="profession_en" value="{{ $testimony->getTranslation("profession", "en") }}">
                                        @if ($errors->has('profession_en'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('profession_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="text_fr">Commentaire du client (Français)</label>
                                        <textarea class="WYSIWYG" name="text_fr" cols="40" rows="3" id="text_fr" spellcheck="true">
                                            {{ $testimony->getTranslation("text", "fr") }}
                                        </textarea>
                                        @if ($errors->has('text_fr'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('text_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="text_en">Commentaire du client (Anglais)</label>
                                        <textarea class="WYSIWYG" name="text_en" cols="40" rows="3" id="text_en" spellcheck="true">
                                            {{ $testimony->getTranslation("text", "en") }}
                                        </textarea>
                                        @if ($errors->has('text_en'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('text_en') }}</strong>
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
