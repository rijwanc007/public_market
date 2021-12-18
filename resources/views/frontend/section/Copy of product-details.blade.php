<section class="pb-120 product_details_page pt-30">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="mt-50 product_details">
                    <div class=row>
                        <div class=col-lg-6>
                            <div class=product_image>
                                <div class=tab-content id=myTabContent>
                                    <div class="fade tab-pane active show"id=details-1 aria-labelledby=details-1-tab role=tabpanel>
                                        <img alt="product details"src="{{asset('assets/frontend/images/product_details-1.jpg')}}"class=optim>
                                        <ul class=sticker>
                                            <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                        </ul>
                                    </div>
                                    <div class="fade tab-pane"id=details-2 aria-labelledby=details-2-tab role=tabpanel>
                                        <img alt="product details"src="{{asset('assets/frontend/images/product_details-2.jpg')}}">
                                    </div>
                                </div>
                                <ul class=nav id=myTab role=tablist>
                                    <li class=nav-item>
                                        <a href=# class=active aria-controls=details-1 aria-selected=true data-toggle=tab id=details-1-tab role=tab>
                                            <img alt="product details"src="{{asset('assets/frontend/images/product_details-1.jpg')}}">
                                        </a>
                                    </li>
                                    <li class=nav-item>
                                        <a href=# aria-controls=details-2 aria-selected=false data-toggle=tab id=details-2-tab role=tab>
                                            <img alt="product details"src="{{asset('assets/frontend/images/product_details-2.jpg')}}">
                                        </a>
                                    </li>
                                    <li class=nav-item>
                                        <a href=# aria-controls=details-3 aria-selected=false data-toggle=tab id=details-3-tab role=tab>
                                            <img alt="product details"src="{{asset('assets/frontend/images/product_details-3.jpg')}}">
                                        </a>
                                    </li>
                                    <li class=nav-item>
                                        <a href=# aria-controls=details-4 aria-selected=false data-toggle=tab id=details-4-tab role=tab>
                                            <img alt="product details"src="{{asset('assets/frontend/images/product_details-4.jpg')}}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=col-lg-6>
                            <div class=row>
                                <div class="col-lg-12 product_name">
                                    <h1> Samsung Galaxy S8</h1>
                                </div>
                                <div class=col-lg-12>
                                    <div class=product_date>
                                        <ul class=meta>
                                            <li><a href=#rating class=rate> <span> 4.5</span> <span class=rating> <i class="fa-star fas white-icon"></i></span></a></li>
                                            <li><a href=# class=like><i class="fal fa-heart"></i>30</a></li>
                                            <li><i class="fa fa-eye"></i><a href=#>1573 VIEWS</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=col-lg-12>
                                    <div class=product_price>
                                        <span class=price>$500</span>
                                        <p>Negotiable</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=feat>
                                    <span class=feat-title>Brand :</span>
                                    <span class=feat-desc>Samsung</span>
                                </div>
                                <div class=feat>
                                    <span class=feat-title>Condition :</span>
                                    <span class=feat-desc>New</span>
                                </div>
                                <div class=feat>
                                    <span class=feat-title>Authenticity :</span>
                                    <span class=feat-desc>Original</span>
                                </div>
                            </div>
                            <div class=product_details_title>
                                <h5 class=title>Features :</h5>
                            </div>
                            <div class="d-flex flex-wrap details_features_wrapper">
                                <div class="d-flex single_features">
                                    <div class=row>
                                        <div class="col-lg-4 pointer-title">
                                            <p><i class="fal fa-camera"></i> Camera :</p>
                                        </div>
                                        <div class="col-lg-8 pointer-desc">
                                            <span> Front Camera 12 megapixel and 8 megapixel </span>
                                        </div>
                                        <div class="col-lg-4 pointer-title">
                                            <p><i class="lni lni-spiner-solid"></i> Platform:</p>
                                        </div>
                                        <div class="col-lg-8 pointer-desc">
                                            <span> Android 9.0 </span>
                                        </div>
                                        <div class="col-lg-4 pointer-title">
                                            <p><i class="lni lni-display-alt"></i> Display :</p>
                                        </div>
                                        <div class="col-lg-8 pointer-desc">
                                            <span> Super Amoled 5.8 Inches</span>
                                        </div>
                                        <div class="col-lg-4 pointer-title">
                                            <p><i class="fal fa-microchip"></i> Memory :</p>
                                        </div>
                                        <div class="col-lg-8 pointer-desc">
                                            <span> 64 GB ROM & 8 GB RAM</span>
                                        </div>
                                        <div class="col-lg-4 pointer-title">
                                            <p><i class="fal fa-clipboard-list"></i> Features :</p>
                                        </div>
                                        <div class="col-lg-8 pointer-desc">
                                            <span> Iris scanner, fingerprint (rear-mounted), accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 product-buy-now-wrapper">
                                <a href={{route('frontend.payment')}}>
                                    <button class="main-btn btn btn-block"><i class="fal fa-cart-plus"></i>  Buy Now
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-9>
                        <div class="mt-30 product_rating">
                            <div class=product_details_title>
                                <h5 class=title>Description :</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt. ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br> <br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
                        </div>
                        <div class="mt-30 product_rating"id=rating>
                            <div class=product_rating_top_bar>
                                <div class=product_details_title>
                                    <h5 class=title>1 Review :</h5>
                                </div>
                                <div class=product_rating_star>
                                    <ul>
                                        <li><i class="fa-star fa"></i></li>
                                        <li><i class="fa-star fa"></i></li>
                                        <li><i class="fa-star fa"></i></li>
                                        <li><i class="fa-star fa"></i></li>
                                        <li><i class="fa-star fa"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-30 single_rating_author">
                                <div class="d-flex align-items-center rating_author">
                                    <div class=author_image>
                                        <img alt=author src="{{asset('assets/frontend/images/author-1.jpeg')}}">
                                    </div>
                                    <div class="media-body author_content">
                                        <h5 class=author_name>Angel Grantham</h5>
                                        <span class=date>25 January, 2023</span>
                                        <ul class=rating_star>
                                            <li><i class="fa-star fa"></i></li>
                                            <li><i class="fa-star fa"></i></li>
                                            <li><i class="fa-star fa"></i></li>
                                            <li><i class="fa-star fa"></i></li>
                                            <li><i class="fa-star fa"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=rating_description>
                                    <p>That, sleep. Reposed that considerable, found a failing. In a means, turned would according of semantics, far were remember support from waved. had to of fully then can name blocks being her not in afforded. devotion logged to and remember and the of in the language would </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-30 product_rating_form">
                            <div class=product_details_title>
                                <h5 class=title>Leave Your Review :</h5>
                            </div>
                            <div class="d-flex flex-wrap product_rating_form_wrapper">
                                <div class=product_details_rating_wrapper>
                                    <div class="mt-20 product_details_rating">
                                        <p><i class="fa fa-star-o"></i> Your Rating</p>
                                        <ul class=rating_radio>
                                            <li>
                                                <input type=radio id=radio1 name=radio checked>
                                                <label for=radio1></label>
                                                <span>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
</span>
                                            </li>
                                            <li>
                                                <input type=radio id=radio2 name=radio>
                                                <label for=radio2></label>
                                                <span>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fal"></i>
</span>
                                            </li>
                                            <li>
                                                <input type=radio id=radio3 name=radio>
                                                <label for=radio3></label>
                                                <span>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
</span>
                                            </li>
                                            <li>
                                                <input type=radio id=radio4 name=radio>
                                                <label for=radio4></label>
                                                <span>
<i class="fa-star fa"></i>
<i class="fa-star fa"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
</span>
                                            </li>
                                            <li>
                                                <input type=radio id=radio5 name=radio>
                                                <label for=radio5></label>
                                                <span>
<i class="fa-star fa"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
<i class="fa-star fal"></i>
</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=product_details_form>
                                    <form action=#>
                                        <div class=row>
                                            <div class=col-md-6>
                                                <div class=single_form>
                                                    <input placeholder="Enter your name . . .">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                            <div class=col-md-6>
                                                <div class=single_form>
                                                    <input placeholder="Enter your mail address . . .">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class=col-md-12>
                                                <div class=single_form>
                                                    <textarea placeholder="Type your review . . ."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class=single_form>
                                                    <button class="main-btn submit-btn"type=button data-bs-target=#staticBackdrop2 data-bs-toggle=modal>
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=col-lg-3>
                        <div class=product_details_sidebar>
                            <div class="mt-30 product_sidebar_owner">
                                <div class=product_details_title>
                                    <h5 class=title>Ad Owner :</h5>
                                </div>
                                <div class="mt-20 product_owner_wrapper">
                                    <div class="d-flex align-items-center owner_author">
                                        <div class=author_image>
                                            <img alt=author src="{{asset('assets/frontend/images/author-1.jpeg')}}">
                                        </div>
                                        <div class="media-body author_content">
                                            <h5 class=author_name> Fahim Ahmed </h5>
                                            <p>Member Since 2021</p>
                                        </div>
                                    </div>
                                    <div class="d-flex owner_address">
                                        <div class=address_icon>
                                            <i class="fa-map-marker-alt far"></i>
                                        </div>
                                        <div class="media-body address_content">
                                            <p> x plaza, y center, z area, Dhaka</p>
                                        </div>
                                    </div>
                                    <div class=owner_call>
                                        <a href=# class=main-btn><i class="fal fa-phone"></i> Click to See Number</a>
                                    </div>
                                    <div class="mt-10">
                                        <a href="{{route('frontend.payment')}}" class="main-btn btn-block"><i class="fal fa-cart-plus"></i> Buy Now</a>
                                    </div>
                                    <div class=owner_call>
                                        <a href="{{route('frontend.store')}}" class=main-btn><i class="fal fa-store-alt"></i> View Store </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30 product_sidebar_contact">
                                <div class=product_details_title>
                                    <h5 class=title>Contact Seller :</h5>
                                </div>
                                <div class=sidebar_contact_form>
                                    <form action=#>
                                        <div class=single_form>
                                            <input placeholder=Name>
                                        </div>
                                        <div class=single_form>
                                            <input type=email placeholder="Mail address">
                                        </div>
                                        <div class=single_form>
                                            <textarea placeholder="Type message"></textarea>
                                        </div>
                                        <div class=single_form>
                                            <button class=main-btn><i class="fal fa-paper-plane"></i>Send to Seller
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-30 product_sidebar_action">
                                <div class=product_details_title>
                                    <h5 class=title>Ad Action :</h5>
                                </div>
                                <div class="d-flex justify-content-between align-items-center sidebar_action_items">
                                    <div class=single_action>
                                        <a href=#>
                                            <i class="fal fa-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </div>
                                    <div class=single_action>
                                        <a href={{route('frontend.favourite')}}>
                                            <i class="fal fa-heart"></i>
                                            <span>Favourite</span>
                                        </a>
                                    </div>
                                    <div class=single_action>
                                        <a href={{route('frontend.payment')}}>
                                            <i class="fal fa-cart-plus"></i>
                                            <span>Buy</span>
                                        </a>
                                    </div>
                                    <div class=single_action>
                                        <a href="{{route('frontend.message')}}">
                                            <i class="fal fa-comments"></i>
                                            <span>Inbox</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30 product_sidebar_map">
                                <div class=product_details_title>
                                    <h5 class=title>Location Map :</h5>
                                </div>
                                <div class=gmap_canvas>
                                    <iframe allowfullscreen aria-hidden=false frameborder=0 height=450 src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58438.99370019598!2d90.37660034520664!3d23.73178733112072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755b9aaa7fb50d1%3A0x7a3104cb73a7058c!2ssetcolbd!3m2!1d23.7317127!2d90.4116198!5e0!3m2!1sen!2sbd!4v1609999884448!5m2!1sen!2sbd"style=border:0 tabindex=0 width=600></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
