<section class="sign_in_area mt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                <div class="sign_in_form">
                    <div class="sign_title">
                        <h5 class="title">Sign In Now</h5>
                    </div>
                    <form action="#">
                        <div class="sign_form_wrapper">
                            <div class="single_form">
                                <input type="email" placeholder="Username">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Password">
                                <i class="fal fa-key"></i>
                            </div>
                            <div class="single_form d-sm-flex justify-content-between">
                                <div class="sign_checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox"></label>
                                    <span>Keep me logged in</span>
                                </div>
                                <div class="sign_forgot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="sign_new">
                                <a href="{{route('frontend.register')}}">New To PublicMarket?</a>
                            </div>
                        </div>
                        <a href="{{route('frontend.dashboard')}}" class="mt-20 log-in">
                            <button  class="main-btn" type="button">
                                Sign In
                            </button>
                        </a>
                        <div class="modal-break-sign mt-20 mb-20">
                            <div class="row" >
                                <div class="col-5"><hr></div>
                                <div class="col-2"><p>Or</p></div>
                                <div class="col-5" ><hr></div>
                            </div>
                        </div>
                        <div class="social-media-sign" >
                            <div class="row" >
                                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3"></div>
                                <div class="col-xl-0 col-lg-0 col-md-1 col-sm-1"></div>
                                <div class="col-xl-12">
                                    <div class="login_social">
                                        <ul>
                                            <li><a href="https://www.facebook.com"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/facebook.png')}}" alt="social_media"></a></li>
                                            <li><a href="https://www.facebook.com"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/linkedin.png')}}" alt="social_media"></a></li>
                                            <li><a href="https://www.twitter.com"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/twiter.png')}}" alt="social_media"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
