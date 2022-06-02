@extends("layouts.admin_base")

@section("title")
    Ajouter une image à la chambre {{ $room->name }}
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
                <form role="form" method="post" action="{{ route("admin.residence.room.photo.store") }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$photo->id}}">
                    <input type="hidden" name="room_id" value="{{$room->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Ajouter une image à la chambre {{ $room->name }}</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has("image") ? " has-error": "" }}">
                                            <label for="image">Image <strong class="textred">* [Taille 500x300]</strong></label>
                                            <input type="file" id="image" name="image" value="{{ $photo->image }}">
                                            @if ($errors->has('image'))
                                                <span class="help-block textred">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        @if($photo->image)
                                            <a href="{{url($photo->image)}}">
                                                <img src="{{url($photo->image)}}" width="100px" height="100px">
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
