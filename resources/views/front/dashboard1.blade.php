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
                            <div class="dashboard01-main">
                                <div class="dashboard01-banner-wrap-flex">
                                    <div class="dashboard01-banner-wrap-text">
                                        <h6>
                                            <img src="{{asset('front/assets/images/dashbag.png')}}" alt="">
                                            Purchase history
                                        </h6>
                                    </div>
                                    <div class="dashboard01-banner-wrap-view">
                                        <a href="{{url('my-dashboard/orders')}}">View All Purchases</a>
                                    </div>
                                </div>
                                <div class="dashboard01-order">
                                    <h6>Manage your orders</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="dashboard02-main">
                                <div class="dashboard02-main-flex">
                                    <div class="dashboard02-main-icon">
                                        <img src="{{asset('front/assets/images/setting.png')}}" alt="">
                                    </div>
                                    <a href="{{url('/my-dashboard/account-details')}}">
                                    <div class="dashboard02-main-text">
                                        <h6>Account Details</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry</p>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="dashboard02-main">
                                <div class="dashboard02-main-flex">
                                    <div class="dashboard02-main-icon">
                                        <img src="{{asset('front/assets/images/location.png')}}" alt="">
                                    </div>
                                    <div class="dashboard02-main-text">
                                        <h6>Address</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <a href="{{url('my-dashboard/wish-list')}}">

                            <div class="dashboard02-main">
                                <div class="dashboard02-main-flex">
                                    <div class="dashboard02-main-icon">
                                        <img src="{{asset('front/assets/images/heart.png')}}" alt="">
                                    </div>
                                    <div class="dashboard02-main-text">
                                        <h6>Wishlist</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        </div>
                    
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="dashboard01-btn-bt">
                                <a href="{{url('logout')}}">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
