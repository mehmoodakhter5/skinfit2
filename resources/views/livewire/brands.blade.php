<div>
    @include('front.inc.header')

    <section class="category-banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-banner-wrap-breacrums">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{Request::url()}}">{{$singlebrand->brand_name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-banner-wrap-breacrums">
                        <h6>{{$singlebrand->brand_name}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-second-wrapper category2-second-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-second-wrap-main">
                        <div class="category-second-wrap-img">
                            <img src="{{asset('front/assets/images/categorybg1.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="category-second-wrap-text">
                            <h6>Lorem Ipsum simply dummy text</h6>
                            <p>Lorem Ipsum is simply <span>dummy text of the printing</span> and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-first-wrapper category2-first-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="index-tenth-wrap-flex">
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
                                <img src="assets/front/images/cat-h15.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Lip Care</h6>
                            </div>
                        </div>
                        <div class="index-tenth-wrap-box">
                            <div class="index-tenth-wrap-box-img">
                                <img src="assets/front/images/cat-h15.png" alt="" class="img-fluid">
                            </div>
                            <div class="index-tenth-wrap-box-text">
                                <h6>Fragrance</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-first-wrap-text">
                        <p>We've handpicked the finest cosmetics, kits, wellness products, perfumes, skincare products, and hair care products to offer online for you.</p>
                        <a href="#!">See All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category3-third-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category3-third-wrap-main">
                        <div class="category3-third-wrap-img">
                            <img src="{{asset('front/assets/images/category2bg1.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="category3-third-wrap-text">
                            <p>Lorem Ipsum is simply dummy text.</p>
                            <h6>Lorem Ipsum simply dummy text</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-third-wrapper">
        <div class="container">
            <div class="row mt-4 mb-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-8 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="index-sixth-wrap-heading">
                                <h6>Best Selling Makeup</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 d-index-none">
                            <div class="index-sixth-wrap-paragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="index-sixth-wrap-btn">
                                <a href="#!">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="desktop-product-slider owl-carousel owl-theme">
                        <div class="item">
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
                        <div class="item">
                            <div class="index-product-desktop-main-wrap">
                                <div class="index-product-desktop-img">
                                    <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                        <div class="item">
                            <div class="index-product-desktop-main-wrap">
                                <div class="index-product-desktop-img">
                                    <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                        <div class="item">
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
                        <div class="item">
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
    </section>
    
    <section class="category-fourth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-fourth-wrap-main">
                        <div class="category-fourth-wrap-img">
                            <img src="{{asset('front/assets/images/categorybg2.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="category-fourth-wrap-text">
                            <p>Lorem Ipsum is simply <a href="#!">dummy text.</a></p>
                            <h5>Lorem Ipsum simply dummy text</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="index-ninth-wrapper category2-ninth-wrapper">
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
    
    <section class="category2-third-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category2-third-main-wrap">
                        <div class="category2-third-main-wrap-img">
                            <img src={{asset('front/assets/images/category2bg2.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="category2-third-main-wrap-text">
                            <p>Lorem Ipsum is simply <span>dummy text.</span></p>
                            <h6>Lorem Ipsum simply dummy text</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category2-fourth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category2-fourth-wrap-text">
                        <h6>Shop by Brand</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category2-fourth-wrap-flex">
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand1.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand1.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand2.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand1.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand2.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="category2-fourth-wrap1">
                            <a href="#!"><img src="assets/front/images/category2brand2.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category2-fourth-wrap-text1">
                        <p>We've handpicked the finest cosmetics, kits, wellness products, perfumes, skincare products, and hair care products to offer online for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category2-fifth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="category2-fifth-wrap-main">
                        <div class="category2-fifth-wrap-main-img">
                            <img src="{{asset('front/assets/images/category2side1.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="category2-fifth-wrap-main-text">
                            <h6>Lorem Ipsum text.</h6>
                            <p>Lorem Ipsum is simply <span>dummy text.</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="category2-fifth-wrap-text1">
                        <h6>Lorem Ipsum simply dummy text</h6>
                        <p>Lorem Ipsum is simply <span>dummy text.</span></p>
                    </div>
                    <div class="swiper categroy-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
                                        <img src="assets/front/images/hp-1.jpg" alt="" class="img-fluid">
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
    
    <section class="category-fourth-wrapper category2-sixth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-fourth-wrap-main">
                        <div class="category-fourth-wrap-img">
                            <img src="assets/front/images/categorybg2.png" alt="" class="img-fluid">
                        </div>
                        <div class="category-fourth-wrap-text">
                            <p>Lorem Ipsum is simply <a href="#!">dummy text.</a></p>
                            <h5>Lorem Ipsum simply dummy text</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-eight-wrapper">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-third-wrap-heading">
                                <h6>Best Discounted Makeup</h6>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-third-wrap-btn">
                                <a href="#!">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="category-eight-wrap-img">
                        <a href="#!"><img src="assets/front/images/categorydis1.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="category-eight-wrap-img">
                        <a href="#!"><img src="assets/front/images/categorydis2.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="category-eight-wrap-img">
                        <a href="#!"><img src="assets/front/images/categorydis3.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="category-eight-wrap-img">
                        <a href="#!"><img src="assets/front/images/categorydis4.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-ninth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-ninth-wrap-text">
                        <h6>Best Category</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="category-tenth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="category-tenth-wrap-main">
                        <div class="category-tenth-wrapboxflex">
                            <div class="category-tenth-wrapbox-img">
                                <img src="assets/front/images/truck-icon.png" alt="">
                            </div>
                            <div class="category-tenth-wrapbox-text">
                                <h6>Free Delivery</h6>
                                <p>On order above Rs 6000</p>
                            </div>
                        </div>
                        <div class="category-tenth-wrapboxflex">
                            <div class="category-tenth-wrapbox-img">
                                <img src="assets/front/images/truck-icon.png" alt="">
                            </div>
                            <div class="category-tenth-wrapbox-text">
                                <h6>Free Delivery</h6>
                                <p>On order above Rs 6000</p>
                            </div>
                        </div>
                        <div class="category-tenth-wrapboxflex">
                            <div class="category-tenth-wrapbox-img">
                                <img src="assets/front/images/truck-icon.png" alt="">
                            </div>
                            <div class="category-tenth-wrapbox-text">
                                <h6>Free Delivery</h6>
                                <p>On order above Rs 6000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.inc.footer')



</div>
