@include('front.inc.header')
<section class="our-brands-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="our-brands-banner-wrap-text">
                    <h6>Our Top <span class="">Brands</span></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <span>Lorem Ipsum has been the</span> industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="index-fourteen-wrap-brand-flex">
                    <div class="brandlogohome">
                        <a href="#!">
                            <img src="assets/front/images/brandlogo1.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="brandlogohome">
                        <a href="#!">
                            <img src="assets/front/images/brandlogo2.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="brandlogohome">
                        <a href="#!">
                            <img src="assets/front/images/brandlogo3.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="brandlogohome">
                        <a href="#!">
                            <img src="assets/front/images/brandlogo4.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="brandlogohome">
                        <a href="#!">
                            <img src="assets/front/images/brandlogo5.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-brands-first-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="swiper brands-fisrt-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="index-fifth-wrap-box">
                                <div class="index-fifth-wrap-box-img">
                                    <img src="assets/front/images/brush-icon.png" alt="">
                                </div>
                                <div class="index-fifth-wrap-box-text">
                                    <h6>K Beauty Brands Lorem.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="index-fifth-wrap-box">
                                <div class="index-fifth-wrap-box-img">
                                    <img src="assets/front/images/brush-icon.png" alt="">
                                </div>
                                <div class="index-fifth-wrap-box-text">
                                    <h6>K Beauty Brands Lorem.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="index-fifth-wrap-box">
                                <div class="index-fifth-wrap-box-img">
                                    <img src="assets/front/images/brush-icon.png" alt="">
                                </div>
                                <div class="index-fifth-wrap-box-text">
                                    <h6>K Beauty Brands Lorem.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="index-fifth-wrap-box">
                                <div class="index-fifth-wrap-box-img">
                                    <img src="assets/front/images/brush-icon.png" alt="">
                                </div>
                                <div class="index-fifth-wrap-box-text">
                                    <h6>K Beauty Brands Lorem.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="index-fifth-wrap-box">
                                <div class="index-fifth-wrap-box-img">
                                    <img src="assets/front/images/brush-icon.png" alt="">
                                </div>
                                <div class="index-fifth-wrap-box-text">
                                    <h6>K Beauty Brands Lorem.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="our-brands-first-wrap-bar">
                    <ul>
                        @foreach($groupedBrands as $letter => $brands)

                        <li>
                            <a href="#{{$letter}}">{{$letter}}</a>
                        </li>
                       @endforeach
                   
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-brands-second-wrapper">
    <div class="container">
        <div class="row">
            @foreach($groupedBrands as $letter => $brands)

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" id='{{ $letter }}'>
                <div class="our-brands-second-wrap-flex">
                    <div class="our-brands-second-wrap1">

                        <h6>{{ $letter }}</h6>
                    </div>
                    <div class="our-brands-second-wrap2">
                        <ul>
                            @foreach($brands as $brand)
                                <li><a href="{{url('brand/'.$brand->brand_slug)}}">{{ $brand->brand_name }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        
         
        </div>
    </div>
</section>

@include('front.inc.footer')
