<section class="payments_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'active','favourite'=>'','privacy'=>'','message'=>'','member'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="payments_content mt-50">
                    <div class="post_title">
                        <h5 class="title">Payments</h5>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="order_details mt-30">
                                    <div class="payments_title">
                                        <h5 class="title">Your Order</h5>
                                    </div>
                                    <div class="order_details_table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <p>Canon Camera</p>
                                                </td>
                                                <td>
                                                    <p class="price">৳55,000.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Iphone X Fresh</p>
                                                </td>
                                                <td>
                                                    <p class="price">৳38,000.00</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>
                                                    <p class="price">৳93000.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>
                                                    <form action="#" class="shipping">
                                                        <div class="radio">
                                                            <input type="radio" checked="" name="radio" id="radio1">
                                                            <label for="radio1"></label>
                                                            <span>Free Shipping</span>
                                                        </div>
                                                        <div class="radio">
                                                            <input type="radio" name="radio" id="radio2">
                                                            <label for="radio2"></label>
                                                            <span>Flat Rate:</span>
                                                            <span class="price"> ৳100.00</span>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>
                                                    <p class="price">৳93100.00</p>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="payments_content mt-50">
                    <div class="row">
                        <div class="post_title">
                            <h5 class="title">Checkout Form</h5>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <div class="payments_title">
                                <h5 class="title">Choose A Payment Method</h5>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input pay-check" type="checkbox" value="" id="paymentMethod1" >
                                        <label class="form-check-label pt-1" for="paymentMethod1">
                                            Mobile Banking
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input pay-check" type="checkbox" value="" id="paymentMethod2" checked>
                                        <label class="form-check-label pt-1" for="paymentMethod2">
                                            Card Payment
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input pay-check" type="checkbox" value="" id="paymentMethod3">
                                        <label class="form-check-label pt-1" for="paymentMethod3">
                                            Cash On Delivery
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-20">
                            <div class="order_details mt-30">
                                <div class="payments_title">
                                    <h5 class="title">Delivery Address</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input pay-check" type="checkbox" value="" id="deliveryAddress1">
                                            <label class="form-check-label pt-1" for="deliveryAddress1">
                                                Same As Account
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input pay-check" type="checkbox" value="" id="deliveryAddress2" checked>
                                            <label class="form-check-label pt-1" for="deliveryAddress2">
                                                Different Receiver
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_details_form">
                                    <div class="single_form">
                                        <label>Delivery Receiver</label>
                                        <input type="text" placeholder="Receiver Name">
                                    </div>
                                    <div class="single_form">
                                        <label>Delivery Local Address</label>
                                        <input type="text" placeholder="Flat No. Road No.">
                                    </div>
                                    <div class="dropdown mt-15">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Division
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><button class="dropdown-item pt-10" type="button">Barishal</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Chittagong</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Dhaka</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Khulna</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Mymensingh</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Rajshahi</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Rangpur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Sylhet</button></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown mt-15">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
                                            District
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                            <li><button class="dropdown-item pt-10" type="button">Dhaka</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Gazipur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Kishoreganj</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Manikganj</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Munshiganj</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Narayanganj</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Narsingdi</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Tangail</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Faridpur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Gopalganj</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Madaripur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Rajbari</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Shariatpur</button></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown mt-15">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Zone
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><button class="dropdown-item pt-10" type="button">Azimpur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Banasree</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Cantonment</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Demra</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Dhanmondi</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Gabtoli</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Gulshan</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Jatrabari</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Khilgaon</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Mirpur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Mohakhali</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Mohammadpur</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Motijheel</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Mugda</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Puran Dhaka</button></li>
                                            <li><button class="dropdown-item pt-10" type="button">Uttara</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-20">
                            <div class="order_details mt-30">
                                <div class="payments_title">
                                    <h5 class="title">Card Details</h5>
                                </div>
                                <div class="order_details_form">
                                    <div class="single_form">
                                        <input type="text" placeholder="Name on Card *">
                                    </div>
                                    <div class="single_form">
                                        <input type="text" placeholder="Credit Card Number *">
                                    </div>
                                    <div class="single_form">
                                        <input type="text" placeholder="Card Verification Number*">
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input pay-check" type="checkbox" value="" id="flexCheckDefault" checked>
                                        <label class="form-check-label pt-1" for="flexCheckDefault">
                                            Remember My Card
                                        </label>
                                    </div>
                                    <div class="details_form">
                                        <div class="form_table">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>GRAND TOTAL:</th>
                                                    <td>৳93100.00</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="single_form">
                                            <a href="#" class="main-btn">Place Order Now</a>
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
