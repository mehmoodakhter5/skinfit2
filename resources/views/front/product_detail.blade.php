@include('front.inc.header')
<section class="product-detail-first-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div thumbsSlider="" class="swiper thumb_product1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$product->product_image_cloud}}/public" loading="lazy" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail1.png" loading="lazy" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail1.png" loading="lazy" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail1.png"  loading="lazy"class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="swiper thumb_product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail-tab1.png" loading="lazy" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail-tab1.png" loading="lazy" class="img-fluid"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail-tab1.png" loading="lazy" class="img-fluid"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/front/images/product-detail-tab1.png"  loading="lazy"class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="product-detail-first-wrap-text1">
                    <h6>Brand: <span>{{$product->brand_name}}</span></h6>
                </div>
                <div class="product-detail-first-wrap-text2">
                    <h6>{{$product->product_name}}</h6>
                </div>
                <div class="product-detail-first-wrap-text2">
                    <div class="product-detail-first-wrap-star">
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
                    <div class="product-detail-first-wrap-rate">
                        <span>(4.5)</span>
                    </div>
                </div>
                <div class="product-detail-first-wrap-text3">
                    <div class="product-detail-price">
                        @if($product->product_discounted_price)
                        <div class="product-detail-price-cut">
                            <h6>Rs {{$product->product_regular_price}}</h6>
                        </div>
                        <div class="product-detail-price-original">
                            <h6>Rs {{$product->product_discounted_price}}</h6>
                        </div>
                        @else
                        <div class="product-detail-price-original">
                            <h6>Rs {{$product->product_regular_price}}</h6>
                        </div>
                        @endif
                    </div>
                    <div class="product-detail-main-stock">
                        <h6>IN STOCK</h6>
                    </div>
                </div>
                <div class="product-detail-first-wrap-text4">
                    <p>{{strip_tags($product->product_short_description)}}</p>
                </div>
                <div class="product-detail-first-wrap-text5">
                    <ul>
                        <li>
                            Volume: <span>{{$product->product_volume}}</span>
                        </li>
                        <li>
                            SKU: <span>{{$product->product_sku}}</span>
                        </li>
                        @if($cate)
                        <li>
                            Category: <span>{{$cate[0]->category_name}}</span>
                        </li>
                        @endif
                    </ul>
                </div>
                {{-- <div class="product-detail-first-wrap-text6">
                    <select name="" id="">
                        <option value="">Similar Shades</option>
                        <option value="">Similar Shades</option>
                        <option value="">Similar Shades</option>
                        <option value="">Similar Shades</option>
                    </select>
                </div> --}}

        <livewire:addtocart :id="$product->id" />
  

                <div class="product-detail-first-wrap-text8">
                    <div class="product-detail-wishlist-btn">   
                        <a href="#!">
                            <img src="{{asset('front/assets/images/wishlist-heart.png')}}" alt="">
                            Add to wishlist
                        </a>
                    </div>
                    <div class="product-detail-product-btn">
                        <a href="#!">Share this Product:</a>
                    </div>
                    <div class="product-detail-social-icon">
                        <ul>
                            <li class="facebook-icon">
                                <img src="{{asset('front/assets/images/pro-facebook.png')}}" alt="">
                            </li>
                            <li class="twitter-icon">
                                <img src="{{asset('front/assets/images/pro-twitter.png')}}" alt="">
                            </li>
                            <li class="instagram-icon">
                                <img src="{{asset('front/assets/images/pro-instagram.png')}}" alt="">
                            </li>
                            <li class="pinterest-icon">
                                <img src="{{asset('front/assets/images/pro-pinterest.png')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-detail-second-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews (2)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">How to Use</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="product-detail-second-wrap-paragraph">
                           {!! $product->product_long_description !!}
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                 <livewire:rating :id="$product->id"/>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="product-detail-second-wrap-paragraph">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-detail-third-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="product-detail-third-wrap-text">
                    <h6>FREQUENTLY BOUGHT TOGETHER</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="product-detail-third-main-bg">
                    <div class="product-detail-third-main-flex">
                        <div class="product-detail-third-main1">
                            <div class="product-detail-third-main1-img">
                                <img src="assets/front/images/pro-detail1.png" alt="">
                            </div>
                            <div class="product-detail-third-main1-text">
                                <h6>This Item</h6>
                                <h5>Maybelline Super Stay Full Coverage Liquid...</h5>
                                <span>Rs 50000</span>
                            </div>
                        </div>
                        <div class="product-detail-third-plus">
                            <img src="assets/front/images/plus.png" alt="">
                        </div>
                        <div class="product-detail-third-main1">
                            <div class="product-detail-third-main1-img">
                                <img src="assets/front/images/pro-detail2.png" alt="">
                            </div>
                            <div class="product-detail-third-main1-text">
                                <h6>This Item</h6>
                                <h5>Maybelline Super Stay Full Coverage Liquid...</h5>
                                <span>Rs 50000</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-third-total-price">
                        <h6>Total Price : Rs 59,000</h6>
                        <a href="#!">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="product-detail-third-main-bg">
                    <div class="product-detail-third-main-flex">
                        <div class="product-detail-third-main1">
                            <div class="product-detail-third-main1-img">
                                <img src="assets/front/images/pro-detail1.png" alt="">
                            </div>
                            <div class="product-detail-third-main1-text">
                                <h6>This Item</h6>
                                <h5>Maybelline Super Stay Full Coverage Liquid...</h5>
                                <span>Rs 50000</span>
                            </div>
                        </div>
                        <div class="product-detail-third-plus">
                            <img src="assets/front/images/plus.png" alt="">
                        </div>
                        <div class="product-detail-third-main1">
                            <div class="product-detail-third-main1-img">
                                <img src="assets/front/images/pro-detail2.png" alt="">
                            </div>
                            <div class="product-detail-third-main1-text">
                                <h6>This Item</h6>
                                <h5>Maybelline Super Stay Full Coverage Liquid...</h5>
                                <span>Rs 50000</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-third-total-price">
                        <h6>Total Price : Rs 59,000</h6>
                        <a href="#!">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="product-listing-text1">
                    <h6>All Products</h6>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($allproduct as $products)
            <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-5">
                <div class="index-product-desktop-main-wrap">
                    <div class="index-product-desktop-img">
                        <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$products->product_image_cloud}}/public" alt="" class="img-fluid">
                    </div>
                    <div class="index-product-desktop-text">
                        <h6>{{$products->product_name}}</h6>
                    </div>
                    <div class="index-product-desktop-rating">
                        <div class="product-rating-star">
                            <ul>
                                <li class="pinkstar">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="pinkstar">
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li class="pinkstar">
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
            @endforeach
            {{ $allproduct->links() }}


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
