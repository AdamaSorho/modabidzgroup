@extends("layouts.admin_base")

@section("title")
    Ajouter une expérience
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
                <form role="form" method="post" action="{{ route("admin.experience.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$experience->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter une expérience</h3>
                            </div>

                            <div class="submit-section">
                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="number">Expérience <span class="textred">(En chiffre)</span></label>
                                        <input type="number" name="number" id="number" value="{{ $experience->number }}">
                                        @if ($errors->has('number'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('number') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wording_fr">Libellé <span class="textred">(Français)</span></label>
                                        <input type="text" name="wording_fr" id="wording_fr" value="{{ $experience->getTranslation("wording", "fr") }}">
                                        @if ($errors->has('wording_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('wording_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wording_en">Libellé <span class="textred">(Anglais)</span></label>
                                        <input type="text" name="wording_en" id="wording_en" value="{{ $experience->getTranslation("wording", "en") }}">
                                        @if ($errors->has('wording_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('wording_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="better">Meilleur expérience</label>
                                        <input id="better" type="checkbox" name="better" @if($experience->better) checked @endif value="1">
                                        @if ($errors->has('better'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('better') }}</strong>
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
