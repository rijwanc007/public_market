@extends('frontend.master')
@section('title','Banner Ads | PublicMarket')
@section('content')
    <div class="header_content tips_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Banner Ads</h3>
                        <p>
                            Make Your Ad Stand Out By Making It A Banner Ad. Banner Ad Will Show Up In Different Sections Of Our Platform Which Will Attract The Most Number Customers.
                        </p>
                        <ul class="header_btn">
                            <li><a class="main-btn button-margin" href="#banner-ads">Banner Ads</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-ads" id="banner-ads">
        <div class="container">
            <h2 class="text-center mt-40 banner-ad-title">Our Banner Ad Packages</h2>
            <div class="banner-ads-wrapper mt-20 mb-40 pt-30 pb-30">
                <p class="ml-15 mr-15 advertising-banner-title">Our Advertising Products</p>
                <h4 class="mt-40 text-center ad-product-title"> Leader Board </h4>
                <div class="row mt-20 banner-product-wrapper ad-products-box pt-20 pb-20">
                    <div class="col-sm-6 banner-product-details mb-4">
                        <p class="pt-10 pl-15"> In this type of banner design the ad banner is strategically placed right above the navigation bar on mobile and below on desktop. the leader board is butte literally by every visitor on the site. A great choice for building brand awareness for everyone or in any specific categories.</p>
                    </div>
                    <div class="col-sm-5">
                        <img class="img-fluid" src="{{asset("assets/frontend/images/leader-board.PNG")}}" />
                    </div>
                </div>
                <h4 class="mt-60 text-center ad-product-title"> Sky Scraper </h4>
                <div class="row mt-20 banner-product-wrapper justify-content-around ad-products-box pt-20 pb-20">
                    <div class="col-sm-5">
                        <img class="img-fluid" src="{{asset("assets/frontend/images/sky-scraper.PNG")}}" />
                    </div>
                    <div class="col-sm-6 banner-product-details">
                        <p class="pt-10 pl-15 mb-4">
                            If you are thinking about advertisement with minimum cost then skyscraper banner Ad is for you. Skyscraper is cost effective with placement on our search result page with high reach. A good option for brand building.
                        </p>
                    </div>
                </div>
                <h4 class="mt-60 text-center ad-product-title"> Base Line </h4>
                <div class="row mt-20 banner-product-wrapper ad-products-box pt-20 pb-20">
                    <div class="col-sm-6 banner-product-details">
                        <p class="pt-10 pl-15">
                            This type of banner Add has double the height compare it to the leaderboard and is placed just before paging pagination links on each search results page it is viewed by almost everyone.
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <img class="img-fluid" src="{{asset("assets/frontend/images/bottom-border.PNG")}}" />
                    </div>
                </div>
                <h4 class="mt-60 text-center ad-product-title"> Featured Box </h4>
                <div class="row mt-20 banner-product-wrapper justify-content-around ad-products-box pt-20 pb-20">
                    <div class="col-sm-5">
                        <img class="img-fluid" src="{{asset("assets/frontend/images/bottom-border.PNG")}}" />
                    </div>
                    <div class="col-sm-6 banner-product-details">
                        <p class="pt-10 pl-15">
                            This type of banner Ad is an optimal placement on each of our Ad pages .This is one of the most effective way to reach a specific target audience when they are reading about the Ad.
                        </p>
                    </div>
                </div>
                <h3 class="text-center mt-60"> To know more or post an ad </h3>
                <h5 class="text-center mt-20"> <i class="fal fa-envelope"></i>  Dummy@email.com</h5>
            </div>
        </div>
    </div>
@endsection
