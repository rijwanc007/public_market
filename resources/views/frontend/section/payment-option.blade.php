<section class="payment_option_wrapper mt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-15 payment_option_card">
                    <div class="card-body">
                        <div class="row payment_option_heading">
                            <div class="col-6">
                                <h3 class="text-left">Total Amount</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="text-right">499৳</h3>
                            </div>
                        </div>
                        <h5 class="pt-20">Choose An Payment Method</h5>
                        <div class="form-check mt-10">
                            <input class="form-check-input" type="radio" name="paymentOption" id="pay1" checked>
                            <label class="form-check-label" for="pay1">
                                <span><img class="img-fluid" src="{{asset('assets/frontend/images/payment_icon/bkash.png')}}" /></span>&nbsp;&nbsp; Bkash Payment
                            </label>
                        </div>
                        <div class="form-check mt-10">
                            <input class="form-check-input" type="radio" name="paymentOption" id="pay2">
                            <label class="form-check-label" for="pay2">
                                <span><img class="img-fluid" src="{{asset('assets/frontend/images/payment_icon/nogod.png')}}" /></span>&nbsp;&nbsp; Nogod Payment
                            </label>
                        </div>
                        <div class="form-check mt-10">
                            <input class="form-check-input" type="radio" name="paymentOption" id="pay3">
                            <label class="form-check-label" for="pay3">
                                <span><img class="img-fluid" src="{{asset('assets/frontend/images/payment_icon/roket.png')}}" /></span>&nbsp;&nbsp; Rocket Payment
                            </label>
                        </div>
                        <div class="form-check mt-10">
                            <input class="form-check-input" type="radio" name="paymentOption" id="pay4">
                            <label class="form-check-label" for="pay4">
                                <span><img class="img-fluid" src="{{asset('assets/frontend/images/payment_icon/dbbl.png')}}" /></span>&nbsp;&nbsp; Some POS System
                            </label>
                        </div>
                        <div class="row justify-content-center pt-20">
                            <div class="col-5 make-payment-wrapper">
                                <a href="{{route('frontend.payment.pos')}}">
                                    <button class="btn main-btn">Make Payment</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
