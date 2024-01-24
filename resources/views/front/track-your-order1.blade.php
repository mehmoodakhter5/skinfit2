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
                                    <span>Track Your Order</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="checkout-banner-wrap-heading">
                        <h6>Track Your Order</h6>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>

<section class="track-your-order1-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="dashboard301-main-text">
                    <h6>Order ID: 33354667454</h6>
                </div>
                <div class="dashboard301-main-flex1">
                    <div class="dashboard301-main-text1">
                        <h6>Order Date: Feb 18 2023</h6>
                    </div>
                    <div class="dashboard301-main-text2">
                        <h6>
                            <img src="{{asset('front/assets/images/flight.png')}}" alt="">
                            Estimated Delivery: 5 March 2023
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="track-your-order1-tabbar">
                    <div class="track-your-tabbar">
                        <ul>
                            <li class="tabbarpink">
                                <a href="#!">Order Placement</a>
                            </li>
                            <li class="tabbarpink">
                                <a href="#!">Order Shipping</a>
                            </li>
                            <li class="tabbarpink">
                                <a href="#!">Order Delivery</a>
                            </li>
                            <li>
                                <a href="#!">Order with Currier</a>
                            </li>
                            <li>
                                <a href="#!">Final Delivery</a>
                            </li>
                        </ul>
                        <div class="tabbar-img">
                            <img src="{{asset('front/assets/images/bar-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="track-order-first-htext1">
                    <h6>You Should Know</h6>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="track-order-first-htext2">
                    <h6>Order placed "In Process":</h6>
                    <p>Once you have placed your order on Bagallery and an order number has been generated, your order status will appear as "In Process."</p>

                    <h6>Order packed "Packed":</h6>
                    <p>Once you have placed your order, it will be sent to our warehouse to be packed for shipment. During this time, your order status will appear as "Packed."</p>

                    <h6>Order shipped "Shipped":</h6>
                    <p>Once we have assigned a tracking number to your order, and it has left our warehouse, the order status will appear as "Shipped."</p>

                    <h6>Order arrived at destination city "Arrived in your city":</h6>
                    <p>Once your package has been shipped out from the Bagallery warehouse and has arrived in your city, the order status will appear as "Arrived in Your City".</p>

                    <h6>Out for delivery "Out for Delivery":</h6>
                    <p>Once the rider is on his way to you, the status will appear as "Out for Delivery." You may be contacted via SMS or call by the rider.
                    Delivery failed "Re-Attempted Delivery in Process":
                    If the rider has made one or two delivery attempts to you but the parcel was not received, the status will appear as "Re-Attempted Delivery in Process".</p>

                    <h6>Order delivered "Delivered":</h6>
                    <p>Once the parcel has been received on your end and the payment has been made, the status of the shipment will appear as "Delivered".</p>

                    <h6>Order unsuccessful "Delivery Unsuccessful":</h6>
                    <p>Once the rider has attempted delivering to you 3 times, and the order was not received, the shipment will be sent back to our warehouse and your return will be processed.</p>

                    <h6>Order Cancelled "Cancelled":</h6>
                    <p>When a shipment has been cancelled, the status of that shipment or order will appear as "Cancelled". You will be notified via email in this case.</p>

                    <h6>Order replacement in process "Replacement in Process":</h6>
                    <p>Once your request for a replacement has been accepted by Bagallery, the status of your shipment will appear as "Replacement in Process." A replacement product/order will be dispatched for you soon and you will be required to return the defected product/order.</p>

                    <h6>Order replaced "Replaced":</h6>
                    <p>Once your replacement product/order has been delivered to you, your order status will appear as "Replaced".</p>

                    <h6>Order Returned "Returned":</h6>
                    <p>Once your return has been received at our warehouse, your order status will appear as "Returned". In case of a pre-paid order (credit or debit card payment) please email us at care@bagallery.com or call us at 021-38383838.</p>

                    <h6>Order waiting at Courier Pick-up point "Waiting for Self Collection":</h6>
                    <p>Once you have agreed to collect your order from the courier service pick-up point, your order status will appear as "Waiting for Self Collection". At this point, your parcel is now ready to be picked-up.</p>

                    <h6>Order delayed "Out for delivery - Delay Expected":</h6>
                    <p>Your order maybe delayed due to some technical reasons mid-transit. At this point, your order status will appear as "Out for delivery – Delay Expected". In this case, please be patient. We will have it delivered to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.inc.footer')