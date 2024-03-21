@include('front.inc.header')
<section class="dashboard-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="dashboard-banner-wrap-main">
                    <h6>Welcome, {{$customer->customer_first_name}} {{$customer->customer_last_name}}</h6>
                </div>
                <div class="dashboard-banner-wrap-bg">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            @foreach($whishlist as $whish)
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Product Cost</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="thtable-position">
                                                <div class="dashboard401-2thtable thtable-cross">
                                                    <img src="{{asset('front/assets/images/cross.png')}}" alt="">
                                                </div> 
                                                <div class="dashboard401-2thtable dashboard401-2thtableimg">
                                                    <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$whish->product_image_cloud}}/public" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="prodetails">
                                                <span>{{$whish->product_name}}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="prodetails-cutprice">
                                                <h6>Rs. {{$whish->product_discounted_price}}</h6>
                                                <h5>Rs. {{$whish->product_regular_price}}</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="date-time">
                                                    <div id="field1">
                                                        <button type="button" id="sub" class="minus">-</button>
                                                        <input type="number" name='qty' id="1" value="1" min="1" class='quantity' max="10" />
                                                        <input type="hidden" name='product_id' value="{{$whish->id}}"/>
                                                        <button type="button" id="add" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="stock-details">
                                                    Out of Stock
                                                </div>
                                                <div class="cart-btn">
                                                    <button type="submit">Add to Cart</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                            @endforeach
                        </div>
                        <!--<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">-->
                        <!--    <div class="dashboard401-main">-->
                        <!--        <div class="dashboard401-main-flex">-->
                        <!--            <div class="dashboard401-main-text">-->
                        <!--                <h6>Wishlist</h6>-->
                        <!--            </div>-->
                        <!--            <div class="dashboard401-main-btn">-->
                        <!--                <a href="#!">Go Back</a>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="dashboard401-table">-->
                        <!--            <div class="dashboard401-headtable-flex">-->
                        <!--                <div class="dashboard401-thtable1">-->
                        <!--                    <h6>SKU</h6>-->
                        <!--                </div> -->
                        <!--                <div class="dashboard401-thtable2">-->
                        <!--                    <h6>Cost</h6>-->
                        <!--                </div> -->
                        <!--                <div class="dashboard401-thtable3">-->
                        <!--                    <h6>Date Added</h6>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-thtable4">-->
                        <!--                    <h6>Quantity</h6>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-thtable5">-->
                        <!--                    <h6>Stock Status</h6>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            @foreach($whishlist as $whish)-->
                        <!--            <div class="dashboard401-headtable-flex2">-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <img src="{{asset('front/assets/images/cross.png')}}" alt="">-->
                        <!--                </div> -->
                        <!--                <div class="dashboard401-2thtable dashboard401-2thtableimg">-->
                        <!--                    <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$whish->product_image_cloud}}/public" alt="">-->
                        <!--                </div> -->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="prodetails">-->
                        <!--                        <span>{{$whish->product_name}}</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="prodetails-cutprice">-->
                        <!--                        <h6>Rs. {{$whish->product_discounted_price}}</h6>-->
                        <!--                        <h5>Rs. {{$whish->product_regular_price}}</h5>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="date-time">-->
                        <!--                        {{ \Carbon\Carbon::parse($whish->created_at)->format('D-m-Y') }}-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <form action="{{url('post-cart')}}" method="post">-->
                        <!--                    @csrf-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="date-time">-->
                        <!--                        <div id="field1">-->
                        <!--                            <button type="button" id="sub" class="minus">-</button>-->
                        <!--                            <input type="number" name='qty' id="1" value="1" min="1" class='quantity' max="10" />-->
                        <!--                            <input type="hidden" name='product_id' value="{{$whish->id}}"/>-->
                        <!--                            <button type="button" id="add" class="plus">+</button>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="stock-details">-->
                        <!--                        Out of Stock-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="dashboard401-2thtable">-->
                        <!--                    <div class="cart-btn">-->
                        <!--                        <button type="submit">Add to Cart</button>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </form>-->
                        <!--            </div>-->
                        <!--   @endforeach-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
