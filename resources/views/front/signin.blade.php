@include('front.inc.header2')
<section class="signup-first-wrapper">
    <div class="container"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="signup-first-wrapmain">
                    <div class="signup-first-wrap-logo">
                        <img src="{{asset('front/assets/images/logo-sign.png')}}" alt="Skinfit">
                    </div>
                    <div class="signup-first-wrap-text">
                        <h6>Create your TheSkinFit account</h6>
                    </div>
                </div>
                <div class="signup-first-wrapmain-feild">
                    <div class="signup-first-wrapmain-feild1">
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="signup-first-wrapmain-feild1">
                        <div class="feild1-show">
                            <h6>Show</h6>
                        </div>
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="signup-first-wrapmain-checkbox">
                        <h6>By Creating Your Account, You Agree To Our Privacy Policy And Terms & Condition.</h6>
                    </div>
                    <div class="signup-first-wrapmain-btn">
                        <a href="">Login Into Your Account</a>
                    </div>
                    <div class="signup-first-wrapmain-btn1">
                        <a href="#!">Forgot Password ?</a>
                    </div>
                    <div class="signup-first-wrapmain-feild1">
                        <a href="{{url('signup')}}">
                            Create Account
                        </a>
                    </div>
                    <div class="signup-first-wrapmain-feild1">
                        <a href="#!">
                            <img src="{{asset('front/assets/images/google.png')}}" alt="Login With Google">
                            Sign in with Google
                        </a>
                    </div>
                    <div class="signup-first-wrapmain-feild1">
                        <a href="#!">
                            <img src="{{asset('front/assets/images/facebooksign.png')}}" alt="Login With Facebook">
                            Sign in with Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.inc.footer')
