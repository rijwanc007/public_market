{{--for footer menu--}}
<div class="fixedbuttom container text-center">
    <nav class="footerbutton">
        <ul>
            <li><a href="#" class="nav__logo" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Post Ads</a></li>
            <li><a href="{{route('frontend.all-ads')}}" class="nav__logo">All Ads</a></li>
        </ul>
    </nav>
</div>
{{--end--}}
<footer class="footer_area">
    <div class="footer_widget pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_link mt-45">
                        <h5 class="footer_title">PublicMarket</h5>
                        <ul class="link">
                            <li><a href="{{route('frontend.index')}}"><i class="fas fa-home footericon"></i>Home</a></li>
                            <li><a href="{{route('frontend.category')}}"><i class="fa fa-list-alt footericon"></i>Category</a></li>
                            <li><a href="{{route('frontend.strategy')}}"><i class="fas fa-chess-queen footericon"></i>Strategy</a></li>
                            <li><a href="{{route('frontend.mission')}}"><i class="fas fa-bullseye footericon"></i>Mission & Vision</a></li>
                            <li><a href="{{route('frontend.team')}}"><i class="fas fa-users footericon"></i>Our Management</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_link mt-45">
                        <h5 class="footer_title">How to Sell Fast</h5>
                        <ul class="link">
                            <li><a href="{{route('frontend.selling-tips')}}"><i class="far fa-lightbulb-on footericon"></i>Selling Tips</a></li>
                            <li><a href="{{route('frontend.buy-sell-quickly')}}"><i class="far fa-fighter-jet footericon"></i>Buy and Sell Quickly</a></li>
                            <li><a href="{{route('frontend.pricing-tips')}}"><i class="far fa-lightbulb-on footericon"></i>Pricing Tips</a></li>
                            <li><a href="{{route('frontend.banner')}}"><i class="fas fa-eye-evil footericon"></i>Banner Advertising</a></li>
                            <li><a href="{{route('frontend.promote-your-ads')}}"><i class="fas fa-route-interstate footericon"></i>Promote Your Ad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_link mt-45">
                        <h5 class="footer_title">Information</h5>
                        <ul class="link">
                            <li><a href="{{route('frontend.contact')}}"><i class="fal fa-address-book footericon"></i>PublicMarket Contact Info</a></li>
                            <li><a href="{{route('frontend.tvc')}}"><i class="fas fa-ad footericon"></i>Tvc</a></li>
                            <li><a href="{{route('frontend.site-map')}}"><i class="fas fa-map-marker-alt footericon"></i>Sitemap</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#adtrick"><i class="fal fa-lightbulb-on footericon"></i>Advertising trickled</a></li>
                            <!-- Modal -->
                            <div class="modal fade" id="adtrick" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{asset('assets/frontend/images/Letterhead.png')}}" alt="term-condition">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Modal -->
{{--                            <li><a href="{{route('frontend.doorstep.delivery')}}"><i class="fal fa-truck-container footericon"></i>Doorstep Delivery</a></li>--}}
                            <li><a href="{{route('frontend.member.about')}}"><i class="far fa-users footericon"></i>Become A Member</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_link mt-45">
                        <h5 class="footer_title">Help & Support</h5>
                        <ul class="link">
                            <li><a href="{{route('frontend.live-chat')}}"><i class="far fa-comment footericon"></i>Live Chat</a></li>
                            <li><a href="{{route('frontend.faq')}}"><i class="fa fa-question-circle footericon"></i>FAQ</a></li>
                            <li><a href="{{route('frontend.safe')}}"><i class="fal fa-user-shield footericon"></i>How to Stay Safe</a></li>
                            <li><a href="{{route('frontend.term-condition')}}"><i class="fal fa-balance-scale footericon"></i>Terms & Conditions</a></li>
                            <li><a href="{{route('frontend.privacy-policy')}}"><i class="fas fa-user-secret footericon"></i>Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="footer_title">Social Media</h5>
                    <br/>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/facebook.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/instagram.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/linkedin.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/pinterest.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/twiter.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/whatsapp.png')}}" alt="social_media"></a>
                    <a href="#"><img class="social_media" src="{{asset('assets/frontend/images/social_media_icon/youtube.png')}}" alt="social_media"></a>
                </div>
                <div class="payment col-md-6">
                    <h5 class="footer_title">We Accept</h5>
                    <br/>
                    <ul>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/bkash.png')}}" alt="payment"></a>
                        </li>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/city-bank.png')}}" alt="payment"></a>
                        </li>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/dbbl.png')}}" alt="payment"></a>
                        </li>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/nogod.png')}}" alt="payment"></a>
                        </li>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/prime-bank.png')}}" alt="payment"></a>
                        </li>
                        <li>
                            <a class="pay-img" href="#"><img src="{{asset('assets/frontend/images/payment_icon/roket.png')}}" alt="payment"></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <br/>
        <div class="footer_copyright pt-15 pb-15">
            <div class="container-fluid">
                <div class="footer_copyright_wrapper text-center d-sm-flex row align-items-center">
                    <div class="copyright mt-15 col-lg-12">
                        <p class="text-center client">Copyright © 2021 <a href="http://setcolbd.com/" target="_blank"> PublicMarket Ltd.</a> All rights reserved.</p>
                        <p class="text-center company">Developed By Ⓓ 2021 <a href="http://setcolbd.com/" target="_blank">:: Skies Engineering & Technologies Company Limited</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
