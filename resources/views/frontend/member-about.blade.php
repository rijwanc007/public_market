@extends('frontend.master')
@section('title','Member About | PublicMarket')
@section('content')
    <div class="header_content  contact_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Become A Member</h3>
                        <p> Become A Member Of Our Team. Get Unlimited Ad Posting Quota And Member Tag On Every Ad Posted Making It Stand Out</p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#member">Know Membership Perks</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.section.member-about')
<br />

 <!-- Modal -->
<div class="modal fade" id="adLimitModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="adLimitLabel">Ad Limits</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body adLimitBody">
<h5>Our Ad Limit Policy</h5>
<p class="pt-10 text-center"> We have a ad limit in place for every category to ensure that there is no spamming. </p>
    <div class="row">
        <h6 class="pt-20 pb-10 mb-10 text-center ad-allowance-title"> Ad Allowances</h6>
        <div class="col-8 ad-allowance-category"><i class="fal fa-plug"></i>&nbsp; Electronics</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-building"></i>&nbsp; Property</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-mobile-alt"></i>&nbsp; Mobile</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-tractor"></i>&nbsp; Agricultural Products</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-car"></i>&nbsp; Transportation</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-industry"></i>&nbsp; Factory & Industry</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-paw"></i>&nbsp; Pet & Animals</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-briefcase"></i>&nbsp; Job</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-globe-americas"></i>&nbsp; Foreign Jobs</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-shopping-bag"></i>&nbsp; Fashion & Beauty</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-golf-ball"></i>&nbsp; Hobby,Sports & Baby</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-shopping-cart"></i>&nbsp; Daily Needs & Grocery</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-tools"></i>&nbsp; Services</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-book-reader"></i>&nbsp; Education</div>
        <div class="col-4 ad-allowance-count">02</div>
        <div class="col-8 ad-allowance-category"><i class="fal fa-home"></i>&nbsp; Home & Living</div>
        <div class="col-4 ad-allowance-count">02</div>
    </div>
</div>
<div class="modal-footer">
<button type="button" data-bs-dismiss="modal" class="btn btn-inverse-success">Understood</button>
</div>
</div>
</div>
</div>
    <!-- Modal -->
<div class="modal fade" id="memberModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberModalLabel">Member Badges</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-20 member-wrapper">
                        <h5 class="text-center">Member Badges</h5>
                        <p class="pt-10 text-center">We have three different badges for our members. You can get premium member & auth dealer & verified seller badges</p>
                    </div>
                    <div class="row pt-10 justify-content-around">
                        <div class="col-3 mt-20 member-badge-columns pb-20">
                            <div class="premium-member-badge-wrapper pt-20">
                                <p class="text-center premium-member-badge"><i class="fas fa-star"></i> Member</p>
                            </div>
                            <p class="mt-3 text-center">Buy a premium membership and get a special premium member badge and a higher monthly ad posting limit. </p>
                        </div>
                        <div class="col-3 mt-20 member-badge-columns pb-20">
                            <div class="auth-dealer-badge-wrapper pt-20">
                                <p class="text-center auth-dealer-badge"><i class="fas fa-check-circle"></i> Auth Dealer</p>
                            </div>
                            <p class="mt-3 text-center"> To become a authorised dealer you just need to verify your business information. Becoming a authorised dealer will ensure client trust. </p>
                        </div>
                        <div class="col-3 mt-20 member-badge-columns pb-20">
                            <div class="verified-seller-badge-wrapper pt-20">
                                <p class="text-center verified-seller-badge"><i class="fas fa-shield-check"></i> Verified Seller </p>
                            </div>
                            <p class="mt-3 text-center"> Our quality assurance team will verify your products for maintaining standard. And the end user will also be assured of the quality. </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" data-bs-dismiss="modal" class="btn btn-inverse-success">Understood</button>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="promotionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="promotionModalLabel">Promotion Packages</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-20 member-wrapper">
                        <h5 class="text-center">Promotional Packages</h5>
                        <p class="pt-10 text-center"> We have promotional packages for your every need choose one while you are posting ad. Add one or more packs as your need</p>
                    </div>
                    <div class="mt-20">
                        <div class="row justify-content-around">
                            <div class="col-2 promotion-package-wrapper">
                                <div class="pt-20 pb-20 bump-up-wrapper text-center">
                                    <i class="fas fa-level-up-alt"></i>
                                </div>
                                <div class="mt-10 promotion-package-heading">
                                    <h6 class="text-center"> Bump Up </h6>
                                    <p class="text-center pt-10">Bump your ad above all other ads in your category. This will increase the customer traffic to your ad and you won't have to worry about marketing and leave it with us.</p>
                                </div>
                            </div>
                            <div class="col-2 promotion-package-wrapper">
                                <div class="pt-20 pb-20 bump-up-wrapper text-center">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div class="mt-10 promotion-package-heading">
                                    <h6 class="text-center"> Top Ad </h6>
                                    <p class="text-center pt-10"> Your ad will be on the top of your category list and marked as top ad which will garner more attention to your ad and help you sell product faster. </p>
                                </div>
                            </div>
                            <div class="col-2 promotion-package-wrapper">
                                <div class="pt-20 pb-20 bump-up-wrapper text-center">
                                    <span class="btn-inverse-danger">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                </div>
                                <div class="mt-10 promotion-package-heading">
                                    <h6 class="text-center"> Urgent </h6>
                                    <p class="text-center pt-10"> Urgent ads will be marked as such and this will help you sell your ad faster as your urgency will be conveyed by an attractive marker </p>
                                </div>
                            </div>
                            <div class="col-2 promotion-package-wrapper">
                                <div class="pt-20 pb-20 bump-up-wrapper text-center">
                                    <i class="far fa-lightbulb-on"></i>
                                </div>
                                <div class="mt-10 promotion-package-heading">
                                    <h6 class="text-center"> Spot Light </h6>
                                    <p class="text-center pt-10"> Spot light will add a glow around your ad which will help you garner attention to your ad faster and let your ad stand out among others. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" data-bs-dismiss="modal" class="btn btn-inverse-success">Understood</button>
                </div>
            </div>
        </div>
    </div>

@endsection
