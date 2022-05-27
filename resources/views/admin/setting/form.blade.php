@extends("layouts.admin_base")

@section("title")
    Réglages du site
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
                <form role="form" method="post" action="{{ route("admin.setting.store") }}" enctype="multipart/form-data">
                    @csrf
                    <div id="add-listing">

                        <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-settings"></i> Réglages du site</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <label for="slogan_fr">Slogan (Français)</label>
                                        <input type="text" name="slogan_fr" id="slogan_fr" value="{{ $setting->getTranslation("slogan", "fr") }}">
                                        @if ($errors->has('slogan_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('slogan_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="slogan_en">Slogan (Anglais)</label>
                                        <input type="text" name="slogan_en" id="slogan_en" value="{{ $setting->getTranslation("slogan", "en") }}">
                                        @if ($errors->has('slogan_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('slogan_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sub_slogan_fr">Sous-titre (Français)</label>
                                        <input type="text" name="sub_slogan_fr" id="sub_slogan_fr" value="{{ $setting->getTranslation("sub_slogan", "fr") }}">
                                        @if ($errors->has('sub_slogan_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('sub_slogan_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sub_slogan_en">Sous-titre (Anglais)</label>
                                        <input type="text" name="sub_slogan_en" id="sub_slogan_en" value="{{ $setting->getTranslation("sub_slogan", "en") }}">
                                        @if ($errors->has('sub_slogan_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('sub_slogan_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="about_us_fr">À propos de nous (Français)</label>
                                        <textarea class="WYSIWYG" name="about_us_fr" cols="40" rows="3" id="about_us_fr" spellcheck="true">
                                            {{ $setting->getTranslation("about_us", "fr") }}
                                        </textarea>
                                         @if ($errors->has('about_us_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('about_us_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="about_us_en">À propos de nous (Anglais)</label>
                                        <textarea class="WYSIWYG" name="about_us_en" cols="40" rows="3" id="about_us_en" spellcheck="true">
                                            {{ $setting->getTranslation("about_us", "en") }}
                                        </textarea>
                                         @if ($errors->has('about_us_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('about_us_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="choose_us_fr">Pourquoi nous choisir ? (Français)</label>
                                        <textarea class="WYSIWYG" name="choose_us_fr" cols="40" rows="3" id="choose_us_fr" spellcheck="true">
                                            {{ $setting->getTranslation("choose_us", "fr") }}
                                        </textarea>
                                         @if ($errors->has('choose_us_fr'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('choose_us_fr') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="choose_us_en">Pourquoi nous choisir ? (Anglais)</label>
                                        <textarea class="WYSIWYG" name="choose_us_en" cols="40" rows="3" id="choose_us_en" spellcheck="true">
                                            {{ $setting->getTranslation("choose_us", "en") }}
                                        </textarea>
                                         @if ($errors->has('choose_us_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('choose_us_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <label class="fb-input" for="facebook"><i class="fa fa-facebook-square"></i> Facebook </label>
                                        <input type="text" name="facebook" id="facebook" placeholder="https://www.facebook.com/" value="{{ $setting->facebook }}">
                                        @if ($errors->has('facebook'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('facebook') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <!-- Website -->
                                    <div class="col-md-4">
                                        <label class="twitter-input" for="twitter"><i class="fa fa-twitter"></i> Twitter </label>
                                        <input type="text" name="twitter" id="twitter" value="{{ $setting->twitter }}" placeholder="https://www.twitter.com/">
                                        @if ($errors->has('twitter'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('twitter') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="linkedin"><i class="fa fa-linkedin"></i> LinkedIn</label>
                                        <input type="text" name="linkedin" value="{{ $setting->linkedin }}" id="linkedin" placeholder="https://www.linkedin.com/">
                                        @if ($errors->has('linkedin'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('linkedin') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="instagram"><i class="fa fa-instagram"></i> Instagram</label>
                                        <input type="text" name="instagram" value="{{ $setting->instagram }}" id="instagram" placeholder="https://www.instagram.com/">
                                        @if ($errors->has('instagram'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('instagram') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="youtube"><i class="fa fa-youtube"></i> Youtube</label>
                                        <input type="text" name="youtube" value="{{ $setting->youtube }}" id="youtube" placeholder="https://www.youtube.com/">
                                        @if ($errors->has('youtube'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('youtube') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="location"><i class="fa fa-location-arrow"></i> Localisation</label>
                                        <input type="text" name="location" value="{{ $setting->location }}" id="location" placeholder="Abidjan, Angré, Programme 6">
                                        @if ($errors->has('location'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('location') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email"> Email</label>
                                        <input type="email" name="email" value="{{ $setting->email }}" id="email" placeholder="info@modabidzgroup.com">
                                        @if ($errors->has('choose_us_en'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('choose_us_en') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone"> <i class="fa fa-phone"></i> Téléphone</label>
                                        <input type="tel" name="phone" value="{{ $setting->phone }}" id="phone" placeholder="+225 00 00 00 00 00">
                                        @if ($errors->has('phone'))
                                            <span class="help-block textred">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group{{ $errors->has("image") ? " has-error": "" }}">
                                            <label for="image">Image <strong class="textred">[Taille 500x600]</strong></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                           id="image" name="image"
                                                           value="{{ $setting->image }}">
                                                </div>
                                            </div>
                                            @if ($errors->has('image'))
                                                <span class="help-block textred">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        @if($setting->image)
                                            <a href="{{url($setting->image)}}">
                                                <img src="{{url($setting->image)}}" width="100px" height="100px">
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
