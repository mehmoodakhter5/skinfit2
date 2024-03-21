<div>
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
                            @if($product->product_category_id !== null)
                            <div class="swiper-slide">
                                <a href="{{url('product/'.$product->product_slug)}}">

                                <div class="index-product-desktop-main-wrap">
                                    <div class="index-product-desktop-img">
                                        <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$product->product_image_cloud}}/public" alt="" loading="lazy" class="img-fluid">
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
                              @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
