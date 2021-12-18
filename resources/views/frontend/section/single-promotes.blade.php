<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-50">
                <div class="text_p">
                    <h5>Bump Up</h5>
                    <p>Get a fresh start every day and get up to 20 times more responses!</p>
                </div>

                <div class="card-body">
                    <form action="" method="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                3 Days <span class="promote-one">Tk 399</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                7 Days <span class="promote-one">Tk 749</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                14 Days <span class="promote-one">Tk 1149</span>
                            </label>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleInputEmail1">Select a payment method</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1"><img src="{{asset('assets/frontend/images/payment_icon/bkash.png')}}"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1" for="flexRadioDefault2"><img src="{{asset('assets/frontend/images/payment_icon/city-bank.png')}}"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1" for="flexRadioDefault2"><img src="{{asset('assets/frontend/images/payment_icon/dbbl.png')}}"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1" for="flexRadioDefault2"><img src="{{asset('assets/frontend/images/payment_icon/nogod.png')}}"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1" for="flexRadioDefault2"><img src="{{asset('assets/frontend/images/payment_icon/prime-bank.png')}}"></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label pb-1" for="flexRadioDefault2"><img src="{{asset('assets/frontend/images/payment_icon/roket.png')}}"></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger mt-2">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
