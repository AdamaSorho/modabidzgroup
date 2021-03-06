@extends("layouts.residence.base")

@section("content")
    @include('sweetalert::alert')
    <!-- Breadcrumb -->
    @component("components.residence.breadscrumb", [
                "route" => route("residence.home"),
                "previous_page" => __("Résidence"),
                "current_page" => __("Chambre Détail")])
    @endcomponent
    <!-- BreadCrumb Ends -->

    <!-- hotel detail -->
    <section class="main-content detail pad-bottom-80">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2>{{ $room->name }}</h2>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($room->photos as $key => $photo)
                                        <li data-target="#in_th_030" data-slide-to="{{ $key }}">
                                            <img src="{{ url($photo->image) }}" alt="in_th_030_02_sm" />
                                        </li>
                                    @endforeach
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active">
                                        <!-- Slide Background -->
                                        <img src="{{ $room->photos ? url($room->photos[0]->image) : asset("admin/images/hotel/room-1.jpg") }}" alt="in_th_030_01" />
                                    </div>
                                    <!-- End of Slide -->
                                    @foreach($room->photos as $photo)
                                        <!-- Second Slide -->
                                        <div class="item">
                                            <!-- Slide Background -->
                                            <img src="{{ url($photo->image) }}" alt="in_th_030_02" />
                                        </div>
                                    @endforeach
                                    <!-- End of Slide -->
                                    {{--<!-- Third Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="images/hotel/room-3.jpg" alt="in_th_030_03" />
                                    </div>
                                    <!-- End of Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="images/hotel/room-4.jpg" alt="in_th_030_03" />
                                    </div>--}}
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                {!! $room->description !!}
                            </div>
                        </div>
                        {{--<div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>--}}
                        {{--<div class="comments detail-box">
                            <div class="detail-title">
                                <h3>Comments</h3>
                            </div>
                            <div class="comment-content">
                                <div class="comment-item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <div class="comment-image">
                                                <img src="images/comment.jpg" alt="Images">
                                                <h4><a href="#">Peter Parker</a></h4>
                                                <span class="comment-date">(18 Dec 2018)</span>
                                                <a class="btn-blue btn-red" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-8">
                                            <div class="comment-desc">
                                                <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="comment-desc">
                                                            <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                            <div class="deal-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star-o"></span>
                                                                <span class="fa fa-star-o"></span>
                                                            </div>
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="comment-desc">
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>Add Your Comment</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="textarea form-group col-xs-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea></textarea>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="Name">Name:</label>
                                        <input type="email" class="form-control" id="Name">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="website">Website:</label>
                                        <input type="email" class="form-control" id="website">
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Submit Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>--}}
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>@lang("Réservation Cette chambre")</h3>
                            </div>
                            <form method="post" action="{{ route("residence.room.booking") }}">
                                @csrf
                                <input type="hidden" name="room_id" value="{{ $room->id }}">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="@lang("Nom")">
                                        @if ($errors->has('name'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang("Email")" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="@lang("Téléphone")" required>
                                        @if ($errors->has('phone'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <input type="date" class="form-control" id="check_in" name="check_in" required placeholder="@lang("Arrivée")">
                                        @if ($errors->has('check_in'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_in') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <input type="date" class="form-control" id="check_out" name="check_out" required placeholder="@lang("Départ")">
                                        @if ($errors->has('check_out'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('check_out') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <select name="guest" class=" form-control" tabindex="1">
                                            <option value="" disabled selected>@lang("Invité")</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        @if ($errors->has('guest'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('guest') }}</strong>
                                                    </span>
                                        @endif
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <button type="submit" class="btn-red btn-red">@lang("RÉSERVER")</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>@lang("Réservation Cette chambre")</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                @foreach($rooms as $element)
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="{{ $element->photos ? url($element->photos[0]->image) : asset("admin/images/hotel/room-1.jpg") }}" alt="Images">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="{{ route("residence.room.detail", $element->id) }}">{{ $element->name }}</a></h4>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-o"></span>
                                                <span class="fa fa-star-o"></span>
                                            </div>
                                            <p><i class="flaticon-time"></i> @lang("À partir :") <span class="bold">{{ $room->amount }} F CFA</span> </p>
                                            <a href="{{ route("residence.room.detail", $element->id) }}" class=" btn-red">@lang("Réserver maintenant")</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            @php
                                $setting = session("setting");
                            @endphp
                            <div class="sidebar-helpline-content">
                                <h3>@lang("Avez-vous une question ?")</h3>
                                <p>@lang("Vous pouvez nous contacter avec ces coordonnées ci-dessous :")</p>
                                <p><i class="flaticon-phone-call"></i> {{ $setting->phone ?? '' }}</p>
                                <p><i class="flaticon-mail"></i> {{ $setting->email ?? '' }}</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel Detail Ends -->
@endsection
