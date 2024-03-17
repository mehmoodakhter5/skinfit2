@include('front.inc.header')
<section class="dashboard-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="dashboard-banner-wrap-main">
                    <h6>Welcome, {{$customer->customer_first_name}} {{$customer->customer_last_name}}</h6>
                </div>
                <div class="dashboard-banner-wrap-bg">
                    <form action="{{route('update-account')}}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                          </div>
                          @endif
                          @if(Session::has('error'))
                          <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                          </div>
                          @endif

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="dashboard401-main">
                                <div class="dashboard401-main-flex">
                                    <div class="dashboard401-main-text">
                                        <h6>Account Details</h6>
                                    </div>
                                    <div class="dashboard401-main-btn">
                                        <a href="{{url('my-dashboard')}}">Go Back</a>
                                    </div>
                                </div>
                                <div class="dashboard401-main-bg">
                                    <div class="checkout-first-wrap-emailfeild">
                                        <h6>Email..*</h6>
                                            <input type="text" name='customer_email' value="{{$customer->customer_email}}" placeholder="">
                                    </div>
                                <div class="checkout-first-wrap-checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="html">
                                        <label for="html">Email me discounts and offers</label>
                                    </div>
                                </div>
                            <div class="checkout-first-wrap-feildmain">
                                <h6>First Name..*</h6>
                                <input type="text" name='customer_first_name'  value="{{$customer->customer_first_name}}" placeholder="">
                            </div>
                            <div class="checkout-first-wrap-feildmain">
                                <h6>Last Name..*</h6>
                                <input type="text" name='customer_last_name' value="{{$customer->customer_last_name}}" placeholder="">
                            </div>
                            <div class="checkout-first-wrap-feildmain">
                                <div class="dashborad6-passchanges">
                                    <h6>Password Change</h6>
                                </div>
                            </div>
                            <div class="checkout-first-wrap-feildmain">
                                <h6>Current password (leave blank to leave unchanged)</h6>
                                <input type="password" name='current_password' placeholder="">
                            </div>
                            <div class="checkout-first-wrap-feildmain">
                                <h6>New password (leave blank to leave unchanged)</h6>
                                <input type="password" name='new_password' placeholder="">
                            </div>
                            <div class="checkout-first-wrap-feildmain">
                                <h6>Confirm new password</h6>
                                <input type="password" name='confirm_password' placeholder="">
                            </div>
                            <div class="checkout-first-wrap-feildmain-btn">
                                <button type="submit">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
