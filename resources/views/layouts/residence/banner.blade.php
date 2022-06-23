<section class="swiper-banner">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($carousels as $carousel)
                    <div class="swiper-slide" style="background-image:url({{ $carousel->image ? url($carousel->image): asset("admin/images/hotel/slider1.jpg") }})">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <h2>{{ $carousel->subtitle }}</h2>
                            <h1>{{ $carousel->title }}</h1>
{{--                            <a href="tour-detail.html" class="btn-red btn-red">Explore Room</a>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="overlay"></div>
    </div>

    <!-- Search Box -->
    <div class="search-box clearfix">
        <div class="search-outer">
            <h3 class="text-center">@lang("Réservation Rapide")</h3>
            <div class="search-content table_item">
                <form method="post" action="{{ route("residence.room.booking") }}">
                    @csrf
                    <div class="form-group">
                        <input type='text' name="name" class="form-control" placeholder="@lang("Nom")" />
                        <i class="flaticon-add-user"></i>
                        @if ($errors->has('name'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type='email' required name="email" class="form-control" placeholder="@lang("Email")" />
                        <i class="flaticon-mail"></i>
                        @if ($errors->has('email'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type='tel' required name="phone" class="form-control" placeholder="@lang("Téléphone")" />
                        <i class="flaticon-phone-call"></i>
                        @if ($errors->has('phone'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type='date' required name="check_in" class="form-control" placeholder="@lang("Arrivée")" />
                        <i class="flaticon-calendar"></i>
                        @if ($errors->has('check_in'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_in') }}</strong>
                                                    </span>
                        @endif
                    </div>

                    <div class="form-group form-icon">
                        <input type='date' required name="check_out" class="form-control" placeholder="@lang("Départ")" />
                        <i class="flaticon-calendar"></i>
                        @if ($errors->has('check_out'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_out') }}</strong>
                                                    </span>
                        @endif
                    </div>

                    <div class="form-group  form-icon">
                        <select name="guest" class="selectpicker form-control" tabindex="1">
                            <option value="" disabled selected>@lang("Invité")</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                        @if ($errors->has('guest'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('guest') }}</strong>
                                                    </span>
                        @endif
                    </div>

                    <div class="form-group  form-icon">
                        <select name="room_id" required class="selectpicker form-control" tabindex="1">
                            <option value="" disabled selected>@lang("Chambre")</option>
                            @foreach($all_rooms as $element)
                                <option value="{{ $element->id }}">{{ $element->name }}</option>
                            @endforeach
                        </select>
                        <i class="flaticon-box"></i>
                        @if ($errors->has('room_id'))
                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('room_id') }}</strong>
                                                    </span>
                        @endif
                    </div>

                    <button type="submit" class="btn-red btn-red">@lang("RÉSERVER")</button>

                </form>
            </div>
        </div>
    </div>
    <!-- Search Box Ends -->
</section>
