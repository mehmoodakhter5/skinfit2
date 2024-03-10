@include('front.inc.header')
<section class="dashboard-banner-wrapper dashboard-banner-wrapper1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="dashboard-banner-wrap-main">
                    <h6>Welcome, {{$customer->customer_first_name}} {{$customer->customer_last_name}}</h6>
                </div>
                <div class="dashboard-banner-wrap-bg">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="dashboard401-main">
                                <div class="dashboard401-main-flex">
                                    <div class="dashboard401-main-text">
                                        <h6>Purchase History</h6>
                                    </div>
                                    <div class="dashboard401-main-btn">
                                        <a href="{{url('my-dashboard')}}">Go Back</a>
                                    </div>
                                </div>
                                <div class="dashboard401-table">
                                    <!-- DESKTOP-VIEW-DASHBORAD-3 -->
                                    <div class="dashboard401-headtable-flex">
                                        <div class="dashboard401-thtable1">
                                            <h6>SKU</h6>
                                        </div> 
                                        <div class="dashboard401-thtable2">
                                            <h6>Order ID</h6>
                                        </div> 
                                        <div class="dashboard401-thtable3">
                                            <h6>Date</h6>
                                        </div>
                                        <div class="dashboard401-thtable4">
                                            <h6>Cost</h6>
                                        </div>
                                        <div class="dashboard401-thtable5">
                                            <h6>Status</h6>
                                        </div>
                                    </div>
                                    @foreach($orders as $order)
                                    <div class="dashboard401-headtable-flex2">
                                        <div class="dashboard401-2thtable">
                                            <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$order->product_image_cloud}}/public" class="img-fluid" alt="">
                                        </div> 
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails">
                                                <span>{{$order->product_name}}</span>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>{{$order->order_no}}</h6>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="date-time">
                                                <span>{{ \Carbon\Carbon::parse($order->created_at)->format('D-m-Y') }}</span>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h5>Rs. {{$order->order_actual_amt}}</h5>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="stock-details">
                                                Pending
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="cart-btn">
                                                <a href="#!">Track Order</a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                                    <!-- DESKTOP-VIEW-DASHBORAD-3 -->
                                    <!-- MOBILE-VIEW-DASHBORAD-3 -->
                                    <div class="dashboard401-headtable-flex2 dashboard401-headtable-flex2-mobile">
                                        <div class="dashboard401-headtable-flex2-mob">
                                            <div class="dashboard401-2thtable">
                                                <img src="assets/front/images/product-cart.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails">
                                                <span>Ogx Shampoo Strength & Length+ Keratin Oil 13oz</span>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>20ZB120000</h6>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="date-time">
                                                14/4/23  6:16 PM
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>Rs. 3000</h6>
                                                <h5>Rs. 1500</h5>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="stock-details">
                                                Pending
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="cart-btn">
                                                <a href="#!">Track Order</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard401-headtable-flex2 dashboard401-headtable-flex2-mobile">
                                        <div class="dashboard401-headtable-flex2-mob">
                                            <div class="dashboard401-2thtable">
                                                <img src="assets/front/images/product-cart.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails">
                                                <span>Ogx Shampoo Strength & Length+ Keratin Oil 13oz</span>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>20ZB120000</h6>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="date-time">
                                                14/4/23  6:16 PM
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>Rs. 3000</h6>
                                                <h5>Rs. 1500</h5>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="stock-details">
                                                Pending
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="cart-btn">
                                                <a href="#!">Track Order</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard401-headtable-flex2 dashboard401-headtable-flex2-mobile">
                                        <div class="dashboard401-headtable-flex2-mob">
                                            <div class="dashboard401-2thtable">
                                                <img src="assets/front/images/product-cart.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails">
                                                <span>Ogx Shampoo Strength & Length+ Keratin Oil 13oz</span>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>20ZB120000</h6>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="date-time">
                                                14/4/23  6:16 PM
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="prodetails-cutprice">
                                                <h6>Rs. 3000</h6>
                                                <h5>Rs. 1500</h5>
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="stock-details">
                                                Pending
                                            </div>
                                        </div>
                                        <div class="dashboard401-2thtable">
                                            <div class="cart-btn">
                                                <a href="#!">Track Order</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- MOBILE-VIEW-DASHBORAD-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
