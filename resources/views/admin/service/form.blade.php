@extends("layouts.admin_base")

@section("title")
    Créer un service
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
                <form role="form" method="post" action="{{ route("admin.service.store") }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$service->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Créer un service</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="wording_fr">Nom (Français)</label>
                                        <input type="text" name="wording_fr" id="wording_fr" value="{{ $service->getTranslation("wording", "fr") }}" required>
                                        @if ($errors->has('wording_fr'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('wording_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="wording_en">Nom (Anglais)</label>
                                        <input type="text" name="wording_en" id="wording_en" value="{{ $service->getTranslation("wording", "en") }}">
                                        @if ($errors->has('wording_en'))
                                            <span class="help-block">
                                                        <strong>{{ $errors->first('wording_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has("image") ? " has-error": "" }}">
                                            <label for="image">Image <strong class="textred"> [Taille 300x300]</strong></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                           id="image" name="image"
                                                           value="{{ $service->image }}">
                                                </div>
                                            </div>
                                            @if ($errors->has('image'))
                                                <span class="help-block text-red">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        @if($service->image)
                                            <a href="{{url($service->image)}}">
                                                <img src="{{url($service->image)}}" width="100px" height="100px">
                                            </a>
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
