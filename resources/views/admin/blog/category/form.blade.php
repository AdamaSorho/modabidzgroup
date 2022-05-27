@extends("layouts.admin_base")

@section("title")
    Ajouter une catégorie de blog
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
                <form role="form" method="post" action="{{ route("admin.blog.category.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter une catégorie de blog</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="wording_fr">Libellé (Français)</label>
                                        <input type="text" name="wording_fr" id="wording_fr" value="{{ $category->getTranslation("wording", "fr") }}">
                                        @if ($errors->has('wording_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('wording_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wording_en">Libellé (Anglais)</label>
                                        <input type="text" name="wording_en" id="wording_en" value="{{ $category->getTranslation("wording", "en") }}">
                                        @if ($errors->has('wording_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('wording_en') }}</strong>
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
