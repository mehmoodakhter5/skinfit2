@include('front.inc.header')

    <section class="index-banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-banner-wrap-text">
                        <div class="index-banner-wrap-heading">
                            <h1>Your all desires in one place Prettier Tone</h1>
                        </div>
                        <div class="index-banner-wrap-paragraph">
                            <p>You'll find a wide range of high-quality cosmetics, skincare, haircare, and perfume brands at <a href="#!">The SkinFit, the online cosmetic store.</a></p>
                        </div>
                        <div class="index-banner-wrap-exbtn">
                            <a href="#!">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-first-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-first-wrap-desktop-flex">
                        <div class="index-first-wrap-boxm1">
                            <div class="index-first-wrap-ctbox1">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h1.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-first-wrap-boxm1">
                            <div class="index-first-wrap-ctbox2">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h2.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="index-first-wrap-ctbox3">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h3.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-timer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-timer-wrap-desktop-flex">
                        <div class="index-timer-wrap-text">
                            <p>Affordable shopping during the cool hours! <span>10 % extra discount</span></p>
                        </div>
                        <div class="index-timer-wrap-timer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-second-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-second-wrap-img">
                        <a href="#!"><img src="{{asset('front/assets/images/h-b1.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-third-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-third-wrap-heading">
                                <h6>New Arrival</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-index-none">
                            <div class="index-third-wrap-paragraph">
                                <p>TheSkinFit embraces a young and holistic approach to contemporary beauty and genuinely believes that beauty should be open to everyone, everywhere. </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-third-wrap-btn">
                                <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="swiper desktop-product-slider">
                        <div class="swiper-wrapper">

                            @foreach($products as $product)
                            <div class="swiper-slide">
                                <a href="{{url('product/'.$product->product_slug)}}">

                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$product->product_image_cloud}}/public" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>{{$product->product_name}}</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs {{$product->product_regular_price}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                     
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-fourth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-fourth-wrap-flex">
                        <div class="index-fourth-wrap-img">
                            <div class="index-fourth-wrap-img1">
                                <img src="{{asset('front/assets/images/fh1.jpg')}}" alt="">
                            </div>
                            <div class="index-fourth-wrap-img2">
                                <img src="{{asset('front/assets/images/fh2.jpg')}}" alt="">
                            </div>
                            <div class="index-fourth-wrap-img3">
                                <img src="{{asset('front/assets/images/fh3.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="index-fourth-wrap-bg">
                            <div class="index-fourth-wrap-text">
                                <p>Affordable shopping during the cool hours! <span>10% extra discount</span></p>
                            </div>
                            <div class="index-fourth-wrap-btn">
                                <a href="#!">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-fourth-catflex">
                        <div class="index-fourth-catimg1">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h4.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-fourth-catimg2">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h5.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-fourth-catimg3">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h6.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-fourth-catimg4">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h7.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-fifth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-fifth-wrap-text">
                        <h6>Why TheSkinFit?</h6>
                        <p>We offer each customer a unique and exciting selection of products by combining the best in beauty with new ideas from around the world. </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="swiper index-fifth-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="index-fifth-wrap-box">
                                    <div class="index-fifth-wrap-box-img">
                                        <img src="{{asset('front/assets/images/brush-icon.png')}}" alt="">
                                    </div>
                                    <div class="index-fifth-wrap-box-text">
                                        <h6>Why SkinFit?</h6>
                                        <p>Lorem Ipsum is a dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-fifth-wrap-box">
                                    <div class="index-fifth-wrap-box-img">
                                        <img src="{{asset('front/assets/images/brush-icon.png')}}" alt="">
                                    </div>
                                    <div class="index-fifth-wrap-box-text">
                                        <h6>Why SkinFit?</h6>
                                        <p>Lorem Ipsum is a dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-fifth-wrap-box">
                                    <div class="index-fifth-wrap-box-img">
                                        <img src="{{asset('front/assets/images/brush-icon.png')}}" alt="">
                                    </div>
                                    <div class="index-fifth-wrap-box-text">
                                        <h6>Why SkinFit?</h6>
                                        <p>Lorem Ipsum is a dummy text</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-fifth-wrap-box">
                                    <div class="index-fifth-wrap-box-img">
                                        <img src="{{asset('front/assets/images/brush-icon.png')}}" alt="">
                                    </div>
                                    <div class="index-fifth-wrap-box-text">
                                        <h6>Why SkinFit?</h6>
                                        <p>Lorem Ipsum is a dummy text</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="index-sixth-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-7 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-sixth-wrap-heading">
                                <h6>Under Rs 1999</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-index-none">
                            <div class="index-sixth-wrap-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                        <div class="col-5 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-sixth-wrap-btn">
                                <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="#!">
                        <div class="index-sixth-wrap-ct-box">
                            <div class="index-sixth-wrap-ct-box-img">
                                <img src="assets/front/images/cat-h8.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-sixth-wrap-ct-box-text">
                                <h6>Fragrance</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="#!">
                        <div class="index-sixth-wrap-ct-box">
                            <div class="index-sixth-wrap-ct-box-img">
                                <img src="assets/front/images/cat-h9.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-sixth-wrap-ct-box-text">
                                <h6>Makeup</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="#!">
                        <div class="index-sixth-wrap-ct-box">
                            <div class="index-sixth-wrap-ct-box-img">
                                <img src="assets/front/images/cat-h10.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-sixth-wrap-ct-box-text">
                                <h6>Skin Care</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <a href="#!">
                        <div class="index-sixth-wrap-ct-box">
                            <div class="index-sixth-wrap-ct-box-img">
                                <img src="assets/front/images/cat-h11.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-sixth-wrap-ct-box-text">
                                <h6>Fragrance</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <section class="index-seventh-wrapper"> 
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-seventh-wrap-desktop-flex">
                        <div class="index-seventh-wrap-ct-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h12.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-seventh-wrap-ct-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h13.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-seventh-wrap-ct-img1">
                        <a href="#!"><img src="{{asset('front/assets/images/cat-h18.jpg')}}" alt="" class="img-fluid"></a>
                        <div class="index-seventh-wrap-ct-img-overlay">
                            <h6>Lorem Ipsum is <span>simply dummy text</span></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <span>Lorem Ipsum has been the</span> industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-eight-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-8 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="index-eight-wrap-heading">
                        <h6>Feature Products</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-index-none">
                    <div class="index-eight-wrap-paragraph">
                        <p>Our beauty experts selected an unbeatable collection for trend followers. TheSkinFit's wide skincare and cosmetics collection was created using high-performance products and rigorous trend research. </p>
                    </div>
                </div>
                <div class="col-4 col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="index-eight-wrap-btn">
                        <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="swiper desktop-product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-ninth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-seventh-wrap-desktop-flex">
                        <div class="index-seventh-wrap-ct-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h12.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-seventh-wrap-ct-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h13.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-tenth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-tenth-wrap-text">
                        <h6>Best Selling Categories</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-tenth-wrap-flex">
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h13.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Makeup</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h15.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Lip Care</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h15.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Fragrance</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h15.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Makeup</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h15.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Lip Care</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="{{asset('front/assets/images/cat-h15.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Fragrance</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-tenth-wrap-paragraph">
                        <p>We've handpicked the finest cosmetics, kits, wellness products, perfumes, skincare products, and hair care products to offer online for you.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-tenth-wrap-ctabtn">
                        <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-eleventh-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eleventh-wrap-ctimg">
                        <img src="{{asset('front/assets/images/h-b1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eleventh-flex">
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h4.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h5.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h6.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h7.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-twelfth-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-8 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-twelft-wrap-heading">
                                <h6>Restock Products</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-index-none">
                            <div class="index-twelft-wrap-paragraph">
                                <p>Take your hands on the things you love at a steep discount; we've just restocked. </p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-twelft-wrap-btn">
                                <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="swiper desktop-product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="{{asset('front/assets/images/hp-1.jpg')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="index-product-desktop-text">
                                        <h6>Maybelline Super Stay Full Coverage Liquid...</h6>
                                    </div>
                                    <div class="index-product-desktop-rating">
                                        <div class="product-rating-star">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-rating-number">
                                            <h6>(4.5)</h6>
                                        </div>
                                    </div>
                                    <div class="index-product-desktop-price">
                                        <div class="product-cut-price">
                                            <h6>Rs 50000</h6>
                                        </div>
                                        <div class="product-original-price">
                                            <h6>Rs 35000</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <section class="index-thirteen-wrapper">
        <div class="container">
            <div class="swiper index-thirteenth-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="index-thirteen-wrap-img">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/blog01.jpg')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="index-thirteen-wrap-img">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/blog02.jpg')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="index-thirteen-wrap-img">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/blog03.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-thirteen-wrap-btext">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <span>Lorem Ipsum has been the</span> industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-fourteen-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-fourteen-wrap-flex">
                        <div class="index-fourteen-wrap-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h19.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="index-fourteen-wrap-img">
                            <a href="#!"><img src="{{asset('front/assets/images/cat-h-20.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-fourteen-wrap-brand-flex">
                        <div class="brandlogohome">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/brandlogo1.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="brandlogohome">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/brandlogo2.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="brandlogohome">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/brandlogo3.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="brandlogohome">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/brandlogo4.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="brandlogohome">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/brandlogo5.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-fifteen-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-fifteen-wrap-heading">
                                <h6>Latest News</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 d-index-none">
                            <div class="index-fifteen-wrap-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-fifteen-wrap-btn">
                                <a href="#!">See All <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper index-fifteenth-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#!">
                            <div class="index-fifteen-blog">
                                <div class="index-fifteen-blog-img">
                                    <img src="{{asset('front/assets/images/blog04.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="index-fifteen-blog-text">
                                    <h6>Dummy Text</h6>
                                    <h5>Lorem Ipsum is simply dummy text of the printing...</h5>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                                    <div class="index-fifteen-blog-flex">
                                        <div class="index-fifteen-blog-span">
                                            <span>2, Sept 2020</span>
                                        </div>
                                        <div class="index-fifteen-blogcta-flex">
                                            <ul>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/thumb_up_alt.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/mode_comment.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/share.png')}}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#!">
                            <div class="index-fifteen-blog">
                                <div class="index-fifteen-blog-img">
                                    <img src="{{asset('front/assets/images/blog05.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="index-fifteen-blog-text">
                                    <h6>Dummy Text</h6>
                                    <h5>Lorem Ipsum is simply dummy text of the printing...</h5>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                                    <div class="index-fifteen-blog-flex">
                                        <div class="index-fifteen-blog-span">
                                            <span>2, Sept 2020</span>
                                        </div>
                                        <div class="index-fifteen-blogcta-flex">
                                            <ul>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/thumb_up_alt.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/mode_comment.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/share.png')}}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#!">
                            <div class="index-fifteen-blog">
                                <div class="index-fifteen-blog-img">
                                    <img src="{{asset('front/assets/images/blog06.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="index-fifteen-blog-text">
                                    <h6>Dummy Text</h6>
                                    <h5>Lorem Ipsum is simply dummy text of the printing...</h5>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                                    <div class="index-fifteen-blog-flex">
                                        <div class="index-fifteen-blog-span">
                                            <span>2, Sept 2020</span>
                                        </div>
                                        <div class="index-fifteen-blogcta-flex">
                                            <ul>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/thumb_up_alt.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/mode_comment.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/share.png')}}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-sixteen-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eleventh-wrap-ctimg">
                        <img src="{{asset('front/assets/images/h-b1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eleventh-flex">
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h4.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h5.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h6.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="index-eleventh-box">
                            <div class="index-eleventh-box-img">
                                <a href="#!"><img src="{{asset('front/assets/images/cat-h7.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="index-testimonial-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="index-testimonial-wrap-text">
                        <h6>Customer Feedbacks</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="swiper testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="testimonial-text">
                                        <h6>Great Product!</h6>
                                    </div>
                                    <div class="testimonial-para">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-flex">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-flex1">
                                        <div class="testimonial-flex1-img">
                                            <img src="{{asset('front/assets/images/user.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-flex1-text">
                                            <h6>Mang Oleh</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="testimonial-text">
                                        <h6>Great Product!</h6>
                                    </div>
                                    <div class="testimonial-para">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-flex">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-flex1">
                                        <div class="testimonial-flex1-img">
                                            <img src="{{asset('front/assets/images/user.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-flex1-text">
                                            <h6>Mang Oleh</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="testimonial-text">
                                        <h6>Great Product!</h6>
                                    </div>
                                    <div class="testimonial-para">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-flex">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-flex1">
                                        <div class="testimonial-flex1-img">
                                            <img src="{{asset('front/assets/images/user.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-flex1-text">
                                            <h6>Mang Oleh</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="testimonial-text">
                                        <h6>Great Product!</h6>
                                    </div>
                                    <div class="testimonial-para">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-flex">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-flex1">
                                        <div class="testimonial-flex1-img">
                                            <img src="{{asset('front/assets/images/user.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-flex1-text">
                                            <h6>Mang Oleh</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="testimonial-text">
                                        <h6>Great Product!</h6>
                                    </div>
                                    <div class="testimonial-para">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="testimonial-flex">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-flex1">
                                        <div class="testimonial-flex1-img">
                                            <img src="{{asset('front/assets/images/user.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-flex1-text">
                                            <h6>Mang Oleh</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-seventeen-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-seventh-wrap-ct-img1">
                        <a href="#!"><img src="{{asset('front/assets/images/cat-h18.jpg')}}" alt="" class="img-fluid"></a>
                        <div class="index-seventh-wrap-ct-img-overlay">
                            <h6>Lorem Ipsum is <span>simply dummy text</span></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <span>Lorem Ipsum has been the</span> industry's standard dummy text.</p>
                            <a href="#!">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="index-eighteen-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eighteen-wrap-heading">
                        <h6>About TheSkinFit</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-eighteen-wrap-paragraph">
                        <p><span>TheSkinFit is Pakistan's leading</span>  Shop the finest collection in Pakistan of 100% authentic, high-quality products from well-known global brands. <span>We have a wide range of high-end makeup, cosmetic kits, wellness products, perfume, skincare, and haircare</span> from a variety of prominent worldwide brands at competitive rates. If you're looking for a reliable online cosmetics retailer in Pakistan, go no further than Theskinfit.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.inc.footer')