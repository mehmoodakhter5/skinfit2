@include('front.inc.header')
<section class="checkout-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="checkout-banner-wrap-main">
                    <div class="checkout-banner-wrap-breadcrums">
                        <ul>
                            <li>
                                <a href="#!">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <span>Cart</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="checkout-banner-wrap-heading">
                        <h6>My Cart</h6>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>

<section class="checkout-first-wrappper checkout3-first-wrappper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="checkout-first-wrap-desktop-flex">
                    <div class="checkout-first-wrap-details">
                        <div class="checkout-first-wrap-detail-t1">
                            <h6>Add <span>Rs 5000</span> to cart and get free shipping!</h6>
                        </div>   
                        <div class="checkout-first-wrap-detail-bar">
                            <img src="assets/front/images/checkout-bar.png" alt="" class="img-fluid">
                        </div>
                        <!-- CHECKOUT3-FIRST-WRAP-TABLE-DESKTOP -->
                        <div class="checkout3-first-wrap-table-flex checkout3-desktop">
                            <div class="checkout3-th-flex">
                                <div class="checkout3-th checkout3-th1">
                                    <span>PRODUCT</span>
                                </div>
                                <div class="checkout3-th checkout3-th2">
                                    <span>PRICE</span>
                                </div>
                                <div class="checkout3-th checkout3-th3">
                                    <span>QUANTITY</span>
                                </div>
                                <div class="checkout3-th checkout3-th4">
                                    <span>SUBTOTAL</span>
                                </div>
                                <div class="checkout3-th checkout3-th5">
                                    <span>REMOVE</span>
                                </div>
                            </div>
                            @foreach($cart as $carts)
                            <div class="checkout3-th1-flex">
                                <div class="checkout3-thh1">
                                    <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$carts['attributes']['image']}}/public" alt="">
                                    <span>{{$carts->name}}</span>
                                </div>
                                <div class="checkout3-thh2">
                                    <span>Rs {{$carts->price}}</span>
                                </div>
                                <div class="checkout3-thh3">
                                    <div class="date-time">
                                        <div id="field1">
                                            <button type="button" id="sub" class="minus">-</button>
                                            <input type="number" id="1" value="1" min="1" class="quantity" max="10">
                                            <button type="button" id="add" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout3-thh4">
                                    <span>Rs 3,000</span>
                                </div>
                                <div class="checkout3-thh5">
                                    <img src="{{asset('front/assets/images/cross.png')}}" alt="Remove">
                                </div>
                            </div>
                            @endforeach
                            <div class="checkout3-th2-flex">
                                <div class="checkout3-th2-main">
                                    <div class="checkout3-th2-input">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="checkout3-th2-btn">
                                        <a href="#!">Apply Coupon</a>
                                    </div>
                                </div>
                                <div class="checkout3-th2-remove">
                                    <a href="#!">Remove All</a>   
                                </div>
                            </div>
                        </div>
                        <!-- CHECKOUT3-FIRST-WRAP-TABLE-DESKTOP -->
                        <!-- CHECKOUT3-FIRST-WRAP-TABLE-MOBILE -->
                        <div class="checkout3-first-wrap-table-flex checkout3-mobile">
                            <div class="checkout3-th-flex">
                                <div class="checkout3-th checkout3-th1">
                                    <span>PRODUCT</span>
                                </div>
                                <div class="checkout3-th checkout3-th3">
                                    <span>QUANTITY</span>
                                </div>
                            </div>
                            <div class="checkout3-thh1">
                                <div class="checkout3-thh1-img-main">
                                    <div class="checkout3-thh1-img">
                                        <img src="assets/front/images/product-cart.jpg" alt="">
                                    </div>
                                    <div class="checkout3-thh1-cross">
                                        <img src="assets/front/images/cross.png" alt="">
                                    </div>
                                </div>
                                <span>Ogx Shampoo Strength & Length+ Keratin Oil 13oz</span>
                                <div class="checkout3-thh3">
                                    <div class="date-time">
                                        <div id="field1">
                                            <button type="button" id="sub" class="minus">-</button>
                                            <input type="number" id="1" value="1" min="1" class="quantity" max="10">
                                            <button type="button" id="add" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout3-th2-flex">
                                <div class="checkout3-th2-main">
                                    <div class="checkout3-th2-input">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="checkout3-th2-btn">
                                        <a href="#!">Apply Coupon</a>
                                    </div>
                                </div>
                                <div class="checkout3-th2-remove">
                                    <a href="#!">Remove All</a>   
                                </div>
                            </div>
                        </div>
                        <!-- CHECKOUT3-FIRST-WRAP-TABLE-MOBILE -->
                    </div>
                    <div class="checkout-first-wrap-slip">
                        <div class="checkout-first-wrap-slip-th">
                            <h6>CART TOTALS</h6>
                        </div>
                        <div class="checkout-first-wrap-slip-total">
                            <ul>    
                                <li>
                                    Subtotal
                                    <h5>Rs.{{\Cart::getSubTotal()}}</h5>
                                </li>
                                <li>
                                    Shipping Charges
                                    <span>Rs.150</span>
                                </li>
                                <li>
                                    Total
                                    <span>Rs.{{\Cart::getTotal()}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="checkout-first-wrap-bankdetail">
                            <div class="checkout-first-wrap-bankdetail-btn checkout3-first-wrap-bankdetail-btn">
                                <a href="#!">Proceed to Checkout</a>
                            </div>
                            <div class="checkout-first-wrap-bankdetail-btn checkout3-first-wrap-bankdetail-btn1">
                                <a href="#!">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')