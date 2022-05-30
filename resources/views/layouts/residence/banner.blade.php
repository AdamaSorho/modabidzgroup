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
            <h3 class="text-center">Quick Booking</h3>
            <div class="search-content table_item">
                <form>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" value="Check In" />
                            <i class="flaticon-calendar"></i>
                            <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>

                    <div class="form-group form-icon">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" value="Check Out" />
                            <i class="flaticon-calendar"></i>
                            <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>

                    <div class="form-group  form-icon">
                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                            <option value="0">Guest</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                    </div>

                    <div class="form-group  form-icon">
                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                            <option value="0">Room</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                        <i class="flaticon-box"></i>
                    </div>

                    <div class="search">
                        <a href="#" class="btn-red btn-red">CHECK AVAILABILITY</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Search Box Ends -->
</section>
