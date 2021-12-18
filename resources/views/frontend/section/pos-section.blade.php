<section class="payment_option_wrapper mt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-30 pos-option-card">
                    <div class="card-body">
                        <h4 class="text-center pos-card-heading"><span><img class="img-fluid" src="{{asset('assets/frontend/images/logo.png')}}" /></span>&nbsp;&nbsp; PublicMarket.Com</h4>
                        <div class="row justify-content-between mt-20">
                            <div class="col-12 pos-system-bill">
                                <div class="row">
                                    <div class="col-8 bill-heading">
                                        <p class="bill-reason">Listing Fees</p>
                                        <p class="biller-name">PublicMarket Settlement</p>
                                    </div>
                                    <div class="col-4 bill-payment">
                                        <p> BDT 499.00 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-20">
                            <input class="radio pos-heading" id="card" name="payment" type="radio" checked>
                            <input class="radio pos-heading" id="mobile" name="payment" type="radio">
                            <input class="radio pos-heading" id="net" name="payment" type="radio">
                            <input class="radio pos-heading" id="login" name="payment" type="radio">
                            <div class="tabs border-head">
                                <div class="row justify-content-around payment-system-headings mb-20">
                                    <div class="col-2 payment-system-options">
                                        <label class="border-child" id="card-tab" for="card"><i class="fas fa-credit-card-front"></i> Card Payment </label>
                                    </div>
                                    <div class="col-2 payment-system-options">
                                        <label id="mobile-tab" for="mobile"> <i class="fal fa-mobile-android"></i> Mobile </label>
                                    </div>
                                    <div class="col-2 payment-system-options">
                                        <label id="net-tab" for="net"> <i class="fal fa-university"></i> Net Banking </label>
                                    </div>
                                    <div class="col-2 payment-system-options">
                                        <label id="login-tab" for="login"> <i class="fal fa-user"></i> Log In </label>
                                    </div>
                                </div>
                            </div>
                            <div class="panels">
                                <div class="row justify-content-around dash-card mt-10">
                                    <div class="panel" id="card-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20">
                                            <div class="row justify-content-around card-payment-wrapper pt-40">
                                                <div class="col-4">
                                                    <button class="btn btn-block">
                                                        <i class="fab fa-cc-visa"></i>
                                                    </button>
                                                    <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                </div>
                                                <div class="col-4">
                                                    <button class="btn btn-block">
                                                        <i class="fab fa-cc-mastercard"></i>
                                                    </button>
                                                    <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                </div>
                                                <div class="col-4">
                                                    <button class="btn btn-block">
                                                        <i class="fab fa-cc-amex"></i>
                                                    </button>
                                                    <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center pt-40">
                                                <div class="col-3">
                                                    <button type="button" class="btn main-btn btn-block pay-now-button">
                                                        Pay Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel" id="mobile-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20 limit-padding">
                                            <div class="col-md-12 col-sm-12 equal-height mb-20">
                                                <div class="row justify-content-around card-payment-wrapper pt-40">
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/dbbl.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/city-bank.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/prime-bank.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center pt-40">
                                                    <div class="col-3">
                                                        <button type="button" class="btn main-btn btn-block pay-now-button">
                                                            Pay Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel" id="net-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20 limit-padding">
                                            <div class="col-md-12 col-sm-12 equal-height mb-20">
                                                <div class="row justify-content-around card-payment-wrapper pt-40">
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/dbbl.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/city-bank.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-block">
                                                            <img src="{{asset('assets/frontend/images/payment_icon/prime-bank.png')}}" />
                                                        </button>
                                                        <span class="payment-card-tick"><i class="fas fa-check-circle"></i> </span>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center pt-40">
                                                    <div class="col-3">
                                                        <button type="button" class="btn main-btn btn-block pay-now-button">
                                                            Pay Now
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel" id="login-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20 limit-padding">
                                            <div class="row justify-content-center log-in-wrapper">
                                                <div class="col-3">
                                                    <p class="text-center mt-40"><i class="fas fa-user"></i></p>
                                                    <a href="{{route('frontend.signin')}}">
                                                    <button class="btn main-btn mt-20 ml-30">
                                                        Login
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
