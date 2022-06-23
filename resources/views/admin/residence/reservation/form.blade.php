@extends("layouts.admin_base")

@section("title")
    Créer une réservation
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
                <form role="form" method="post" action="{{ route("admin.residence.reservation.store") }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$booking->id}}">
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-map"></i> Créer une réservation</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-4">
                                        <label for="name">Nom & Prénom(s)</label>
                                        <input type="text" name="name" id="name" value="{{ $booking->name }}">
                                        @if ($errors->has('name'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" value="{{ $booking->email }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone">Téléphone (Préférence Whatsapp)</label>
                                        <input type="tel" name="phone" id="phone" value="{{ $booking->phone }}">
                                        @if ($errors->has('phone'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="check_in">Arrivée</label>
                                        <input type="date" name="check_in" id="check_in" value="{{ $booking->check_in }}">
                                        @if ($errors->has('check_in'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_in') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="check_out">Départ</label>
                                        <input type="date" name="check_out" id="check_out" value="{{ $booking->check_out }}">
                                        @if ($errors->has('check_out'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_out') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="guest">Nombre personnes</label>
                                        <input type="number" name="guest" id="guest" value="{{ $booking->guest }}">
                                        @if ($errors->has('guest'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('guest') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label for="room_id">@lang("Chambre")</label>
                                        <select name="room_id" id="room_id">
                                            <option value="">@lang("Choisir une catégorie")</option>
                                            @foreach($rooms as $room)
                                                <option value="{{ $room->id }}" @if($room->id == $booking->room_id) selected @endif>{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('room_id'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('room_id') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="autre">@lang("Type")</label>
                                        <select name="status" id="autre">
                                            <option value="">@lang("Choisir une catégorie")</option>
                                            <option value="1" @if($booking->status == 1) selected @endif>@lang("Réservation")</option>
                                            <option value="2" @if($booking->status == 2) selected @endif>@lang("Occupation")</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('status') }}</strong>
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
