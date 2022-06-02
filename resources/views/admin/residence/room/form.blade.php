@extends("layouts.admin_base")

@section("title")
    Ajouter une chambre
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
                <form role="form" method="post" action="{{ route("admin.residence.room.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$room->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter une chambre</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="name_fr">Nom (Français)</label>
                                        <input type="text" name="name_fr" id="name_fr" value="{{ $room->getTranslation("name", "fr") }}">
                                        @if ($errors->has('name_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('name_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name_en">Nom (Anglais)</label>
                                        <input type="text" name="name_en" id="name_en" value="{{ $room->getTranslation("name", "en") }}">
                                        @if ($errors->has('name_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('name_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state">@lang("État")</label>
                                        <select name="state" id="state">
                                            <option value="0" @if($room->state == 0) selected @endif>@lang("Indisponible")</option>
                                            <option value="1" @if($room->state == 1) selected @endif>@lang("Disponible")</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="amount">À partir (montant en F CFA) / Jour</label>
                                        <input type="number" name="amount" id="amount" value="{{ $room->amount }}" placeholder="Ex: 15000">
                                        @if ($errors->has('amount'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description_fr">Description (Français)</label>
                                        <textarea name="description_fr" id="description_fr" >
                                            {!! $room->getTranslation("description", "fr") !!}
                                        </textarea>
                                        @if ($errors->has('description_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('description_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description_en">Description (Anglais)</label>
                                        <textarea name="description_en" id="description_en" >
                                            {!! $room->getTranslation("description", "en") !!}
                                        </textarea>
                                        @if ($errors->has('description_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('description_en') }}</strong>
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
            .create( document.querySelector( '#description_fr' ), {
                    extraPlugins: [SimpleUploadAdapterPlugin],
                    headers: {
                        token: _token,
                        url: "/admin/ckeditor/upload",
                    }
                }
            )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#description_en' ), {
                extraPlugins: [SimpleUploadAdapterPlugin],
                headers: {
                    token: _token,
                    url: "/admin/ckeditor/upload",
                }
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
