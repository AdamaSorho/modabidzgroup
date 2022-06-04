<!-- Footer Start -->
@php
    $setting = session("setting");
@endphp
<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href=""><h2 class="text-secondary mb-3"><span class="text-white">MODABIDZ</span>GROUP</h2></a>
            <p>{{ \Illuminate\Support\Str::limit($setting->about_us, 300) ?? '' }}</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $setting->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $setting->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $setting->linkedin ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="{{ $setting->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Nous contacter</h4>
            <p>Dolor clita stet nonumy clita diam vero, et et ipsum diam labore</p>
            <p><i class="fa fa-map-marker-alt mr-2"></i>{{ $setting->location ?? '' }}</p>
            <p><i class="fa fa-phone-alt mr-2"></i>{{ $setting->phone ?? '' }}</p>
            <p><i class="fa fa-envelope mr-2"></i>{{ $setting->email ?? '' }}</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Accès rapide</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="{{ route("home") }}"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                <a class="text-white mb-2" href="{{ route("blog") }}"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                <a class="text-white" href="{{ route("contact") }}"><i class="fa fa-angle-right mr-2"></i>Contactez-nous</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Newsletter</h4>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                </div>
                <div>
                    <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid bg-secondary text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
        &copy; <a class="text-white font-weight-medium" href="#">Modabidz Group</a>. All Rights Reserved. Designed by
        <a class="text-white font-weight-medium" href="https://www.linkedin.com/in/adama-sorho-a55055146/">AdamaSorho</a>
    </p>
</div>
<!-- Footer End -->
