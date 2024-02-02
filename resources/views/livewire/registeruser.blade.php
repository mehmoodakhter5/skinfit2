<div>
    <section class="signup-first-wrapper">
        <div class="container"> 
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="signup-first-wrapmain">
                        <div class="signup-first-wrap-logo">
                            <img src="{{asset('front/assets/images/logo-sign.png')}}" alt="Logo">
                        </div>
                        <div class="signup-first-wrap-text">
                            <h6>Create your TheSkinFit account</h6>
                        </div>
                    </div>
                    <div class="signup-first-wrapmain-feild">
                        <form wire:submit='register'>
                        <div class="signup-first-wrapmain-feild1">
                            <input type="text" placeholder="Email Address" wire:model.live="customer_email">
                            <div>
                                @error('customer_email') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <input type="text" placeholder="First Name" wire:model.live="customer_first_name">
                            <div>
                                @error('customer_first_name') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <input type="text" placeholder="Last Name" wire:model.live="customer_last_name">
                            <div>
                                @error('customer_last_name') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <input type="text" placeholder="Mobile phone number (optional)" wire:model.live="customer_phone_number"> 
                            <div>
                                @error('customer_phone_number') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <div class="feild1-show">
                                <h6>Show</h6>
                            </div>
                            <input type="password" placeholder="Create password" wire:model.live="customer_password">
                            <div>
                                @error('customer_password') <span class="error">{{ $message }}</span> @enderror 
                            </div>
                        </div>
                        <div class="signup-first-wrapmain-checkbox">
                            <h6>By Creating Your Account, You Agree To Our Privacy Policy And Terms & Condition.</h6>
                        </div>
                        <div class="signup-first-wrapmain-btn">
                            <button type='submit' >Create Account</button>
                        </div>
                    </form>
                        <div class="signup-first-wrapmain-btn1">
                            <a href="{{url('signin')}}">Or Sign In</a>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <a href="#!">
                                <img src="{{asset('front/assets/images/google.png')}}" alt="Login With Google">
                                Sign in with Google
                            </a>
                        </div>
                        <div class="signup-first-wrapmain-feild1">
                            <a href="{{url('auth/facebook')}}">
                                <img src="{{asset('front/assets/images/facebooksign.png')}}" alt="Singup With Facebook">
                                Sign in with Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
