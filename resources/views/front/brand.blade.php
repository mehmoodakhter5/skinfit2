@include('front.inc.header')

<section class="product-listing-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="product-listing-banner-wrap-main">
                    <img src="{{asset('storage/brand/'.$singlebrand->brand_banner)}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-listing-first-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="accordion mobile_menu" id="accordionExample">
                    {{-- <div class="close_btn">
                        <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                    </div> --}}
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="newheadingOne">
                            <button class="accordion-button newAccoBtn" type="button" data-bs-toggle="collapse" data-bs-target="#newcollapseOne" aria-expanded="true" aria-controls="newcollapseOne">
                                <div class="product-listing-first-wrap-t">
                                    <h6>Sub Categories</h6>
                                </div>
                            </button>
                        </h2>
                        <div id="newcollapseOne" class="accordion-collapse collapse show" aria-labelledby="newheadingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion" id="accordionExample1">
                                    {{-- @foreach($sub as $subcat)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="checkout-first-wrap-checkbox">
                                                <div class="form-group">
                                                    <input type="checkbox"  class="subcategorycheck cat-id" data-id='{{$subcat->sub_category_id}}' name='sub-category' id="{{$subcat->sub_category_name}}">
                                                    <label for="{{$subcat->sub_category_name}}">{{$subcat->sub_category_name}}</label>
                                                </div>
                                            </div>
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                {{$subcat->sub_category_text}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="newheadingTwo">
                            <button class="accordion-button collapsed newAccoBtn" type="button" data-bs-toggle="collapse" data-bs-target="#newcollapseTwo" aria-expanded="false" aria-controls="newnewcollapseTwo">
                                <div class="product-listing-first-wrap-t">
                                    <h6>Brands</h6>
                                </div>
                            </button>
                        </h2>
                        <div id="newcollapseTwo" class="accordion-collapse collapse" aria-labelledby="newheadingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                            <div class="checkout-first-wrap-checkbox">
                                                <div class="form-group">
                                                    <input type="checkbox" id="nine">
                                                    <label for="nine">The Ordinary</label>
                                                </div>
                                            </div>
                                        </button>
                                        </h2>
                                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="newheadingThree">
                            <button class="accordion-button collapsed newAccoBtn" type="button" data-bs-toggle="collapse" data-bs-target="#newcollapseThree" aria-expanded="false" aria-controls="newcollapseThree">
                                <div class="product-listing-first-wrap-t">
                                    <h6>Filter By Price</h6>
                                </div>
                            </button>
                        </h2>
                        <div id="newcollapseThree" class="accordion-collapse collapse" aria-labelledby="newheadingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="product-ranger-bar">
                                    <section class="range-slider">
                                        <input value="500" min="500" max="50000" step="500" type="range">
                                        <input value="50000" min="500" max="50000" step="500" type="range">
                                        <div class="range-slider-flex">
                                            <div class="range-slider-price-range">
                                                <span class="rangeValues"></span>
                                            </div>
                                            <div class="range-slider-priceheading">
                                                <h6>FILTER</h6>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="product-listing-firstpro-flex">
                            <div class="product-listing-firstpro-text">
                                <h6> {{$singlebrand->brand_name}}</h6>
                            </div>
                            <div class="product-listing-firstpro-mobile-menu-btn">
                                <button id="productListMobile">Filter Products</button>
                            </div>
                            <div class="product-listing-firstpro-dropdown">
                                <select name="" id="">
                                    <option value="">Sort by Latest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="product-listing-text1">
                            <h6>Featured Products</h6>
                        </div>
                    </div>
                </div>
        @if(isset($feature->product_name) && !empty($feature->product_name))
        <div class="swiper product_detail_slider">
            <div class="swiper-wrapper">
                @foreach($feature as $fea)
                <div class="swiper-slide">
                    <div class="index-product-desktop-main-wrap">
                        <div class="index-product-desktop-img">
                            <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$fea->product_image_cloud}}/public" alt="" class="img-fluid">
                        </div>
                        <div class="index-product-desktop-text">
                            <h6>{{$fea->product_name}}</h6>
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
                @endforeach
               
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="product-listing-text1">
                    <h6>All Products</h6>
                </div>
            </div>
            
        </div>
        <div class="swiper product_detail_slider">
            <div class="swiper-wrapper">
                @foreach($product as $products)
                <div class="swiper-slide mainslide">
                    <div class="index-product-desktop-main-wrap">
                        <div class="index-product-desktop-img">
                            <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$products->product_image_cloud}}/public" alt="" class="img-fluid" loading='lazy'>
                        </div>
                        <div class="index-product-desktop-text">
                            <h6>{{$products->product_name}}</h6>
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
                @endforeach
              
            </div>
        </div>
        </div>

        </div>
    </div>
</section>

@include('front.inc.footer')