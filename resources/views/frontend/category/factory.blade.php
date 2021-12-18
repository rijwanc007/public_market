@extends('frontend.master')
@section('title','Factory | PublicMarket')
@section('content')
    <div class="ad-container container mt-80">
        <img class="img-fluid" src="{{asset('assets/frontend/images/ad-background.jpg')}}" />
    </div>

<section class="product_page pt-70 pb-120" id="ads">
    <div class="container">
        <div class="row ad-wrapper">
            <div class="col-12">
                <div class="top-content">
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-5 product-search-button pb-3">
                            <div class="dropdown">
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="far fa-map-marker-alt drop-image"></i> &nbsp;<span>Select Location</span>
                                </button>
                                <ul class="dropdown-menu location-sort-ul" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Barishal</a></li>
                                    <li><a class="dropdown-item" href="#">Chittagong</a></li>
                                    <li><a class="dropdown-item" href="#">Dhaka</a></li>
                                    <li><a class="dropdown-item" href="#">Mymensingh</a></li>
                                    <li><a class="dropdown-item" href="#">Khulna</a></li>
                                    <li><a class="dropdown-item" href="#">Rajshahi</a></li>
                                    <li><a class="dropdown-item" href="#">Rangpur</a></li>
                                    <li><a class="dropdown-item" href="#">Sylhet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 product-search-button pb-3">
                            <div class="dropdown">
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="far fa-tags drop-image"></i> &nbsp;<span>Factory & Industry</span>
                                </button>
                                <ul class="dropdown-menu location-sort-ul" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.electronics')}}">Electronics</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.mobile')}}">Mobile</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.home')}}">Home & Living</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.transportation')}}">Transportation</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.pet')}}">Pet & Animals</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.property')}}">Property</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.fashion')}}">Fashion & Beauty</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.hobby')}}">Hobby & Sports</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.daily')}}">Daily Needs & Grocery</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.education')}}">Education</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.job')}}">Job</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.service')}}">Services</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.agriculture')}}">Agricultural Products</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.foreign')}}">Foreign Jobs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <form class="d-flex">
                                <input class="form-control me-2 product-top-search" type="search"
                                       placeholder="What Are You Looking For" aria-label="Search">
                                <button class="btn btn-outline-search" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_sidebar pt-3">
                    <div class="sidebar_price_range mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Filters</h5>
                        </div>
                        <div class="price_range_content">
                            <div class="dropdown pt-10">
                                <p class="pb-1 filter-heading">Sort By :</p>
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Date & Price</span> <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu product-sort-ul" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Date : Newest On Top</a></li>
                                    <li><a class="dropdown-item" href="#">Date : Oldest On Top</a></li>
                                    <li><a class="dropdown-item" href="#">Price : High To Low</a></li>
                                    <li><a class="dropdown-item" href="#">Price : Low To High</a></li>
                                </ul>
                            </div>
                            <div class="check-features pt-20">
                                <p class="pb-1 filter-heading">Filter Ads By :</p>
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value=""
                                           id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Featured
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value=""
                                           id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Verified Seller
                                    </label>
                                </div>
                            </div>
                            <div class="radio-features pt-20">
                                <div class="discount_content">
                                    <p class="pb-1 filter-heading">Some More Filters :</p>
                                    <ul class="discount_radio">
                                        <li>
                                            <input type="radio" checked="" name="radio" id="radio4">
                                            <label for="radio4"></label> <span>Top Sellers</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio5">
                                            <label for="radio5"></label> <span>PublicMarket Members</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio6">
                                            <label for="radio6"></label> <span>Banner Advertisements</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="sidebar_categories mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="sidebar_categories_content">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne" role="button"
                                           aria-expanded="false" aria-controls="collapseOne"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-1.svg')}}" alt="Icon"> Women's
                                            Clothing (10)</a>
                                    </div>
                                    <div class="collapse" id="collapseOne">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" role="button"
                                           aria-expanded="false" aria-controls="collapseTwo"> <img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-2.svg')}}" alt="Icon"> Men's
                                            Clothing (87)</a>
                                    </div>
                                    <div class="collapse" id="collapseTwo">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree"
                                           role="button" aria-expanded="false" aria-controls="collapseThree"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-3.svg')}}" alt="Icon">
                                            Telecommunications (25)</a>
                                    </div>
                                    <div class="collapse" id="collapseThree">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour"
                                           role="button" aria-expanded="false" aria-controls="collapseFour"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-4.svg')}}" alt="Icon"> Cellphones
                                            (10078)</a>
                                    </div>
                                    <div class="collapse" id="collapseFour">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseFive"
                                           role="button" aria-expanded="false" aria-controls="collapseFive"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-5.svg')}}" alt="Icon"> Computer &
                                            Office (597)</a>
                                    </div>
                                    <div class="collapse" id="collapseFive">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseSix" role="button"
                                           aria-expanded="false" aria-controls="collapseSix"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-6.svg')}}" alt="Icon"> Consumer
                                            Electronics (27) </a>
                                    </div>
                                    <div class="collapse" id="collapseSix">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseSeven"
                                           role="button" aria-expanded="false" aria-controls="collapseSeven"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-7.svg')}}" alt="Icon"> Jewelry &
                                            Accessories (92) </a>
                                    </div>
                                    <div class="collapse" id="collapseSeven">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseEight"
                                           role="button" aria-expanded="false" aria-controls="collapseEight"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-8.svg')}}" alt="Icon"> Home &
                                            Garden (07) </a>
                                    </div>
                                    <div class="collapse" id="collapseEight">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseNine"
                                           role="button" aria-expanded="false" aria-controls="collapseNine"><img
                                                src="{{asset('assets/frontend/images/sidebar_icon/categories-9.svg')}}" alt="Icon"> Luggage &
                                            Bags (346) </a>
                                    </div>
                                    <div class="collapse" id="collapseNine">
                                        <div class="card-body">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">iPhones</a></li>
                                                <li><a href="#">Feature Phones</a></li>
                                                <li><a href="#">Refurbished Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">Mobile Phone Parts</a></li>
                                                <li><a href="#">Phone Bags & Cases</a></li>
                                                <li><a href="#">Communication Equipment's</a></li>
                                                <li><a href="#">Walkie Talkie</a></li>
                                                <li><a href="#">Walkie Talkie Parts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_price_range mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Price Range</h5>
                        </div>
                        <div class="price_range_content">
                            <input type="range" class="form-custom-range">
                            <datalist>
                                <option value="0" label="0"></option>
                                <option value="10"></option>
                                <option value="20"></option>
                                <option value="30"></option>
                                <option value="40"></option>
                                <option value="50" label="50k"></option>
                                <option value="60"></option>
                                <option value="70"></option>
                                <option value="80"></option>
                                <option value="90"></option>
                                <option value="100" label="100k"></option>
                            </datalist>
                        </div>
                    </div>
                    <div class="sidebar_discount mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Top Deals</h5>
                        </div>
                        <div class="discount_content">
                            <ul class="discount_radio">
                                <li>
                                    <input type="radio" checked="" name="radio" id="radio1">
                                    <label for="radio1"></label> <span>Flat 10% Off</span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio2">
                                    <label for="radio2"></label> <span>Flat 20% Off</span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio3">
                                    <label for="radio3"></label> <span>Flat 50% Off</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_profile mt-30">
                        <div class=profile_user>
                            <div class=post_title>
                                <h5 class=title>Featured Ad</h5>
                            </div>
                            <div class=user_list>
                                <div class="professional-side-ad pt-20 ">
                                    <img src="{{asset('assets/frontend/images/pro-sidebar-ad.jpg')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="tab-content pt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="product_list">
                            <div class="single_ads_card ads_list d-sm-flex mt-30 spotlight">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/coffee-machine.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Coffee Grinder And Machine</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Dhaka, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳39,999.00</span>
                                        <span class="date">25 Jan, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/defibrilator.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Heart Stream Defibrillator</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Chittagong, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳36,000.00</span>
                                        <span class="date">22 May, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/crane.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">3 Story Crane</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Khulna, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳2,200,000.00</span>
                                        <span class="date">12 March, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/ambulance-stretcher.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Ambulance Stretcher</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Sylhet, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳12,000.00</span>
                                        <span class="date">28 April, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/pizza-oven.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Custom Built Oven</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Rangpur, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳745,000.00</span>
                                        <span class="date">5 June, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ad_photo/stitch-machine.jpg')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Factory & Industry</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Singer Industrial Stitch Machine</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Mymensingh, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳3,000.00</span>
                                        <span class="date">2 February, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mt-30 pt-3">
                <div class="sidebar-ad">
                    <div class="small-ad"><img src="{{asset('assets/frontend/images/banner-ad-small.jpg')}}" class="img-fluid"></div>
                </div>
            </div>
            <div class="col-lg-12 pt-10">
                <div class="bottom-ad"><img src="{{asset('assets/frontend/images/bottom-banner.jpg')}}" class="img-fluid"/></div>
                <div class="pagination_wrapper mt-50">
                    <ul class="pagination justify-content-center">
                        <li><a class="Previous" href="#"><i class="fal fa-angle-left"></i></a></li>
                        <li><a class="number" href="#">1</a></li>
                        <li><a class="number active" href="#">2</a></li>
                        <li><a class="number" href="#">3</a></li>
                        <li><a class="next" href="#"><i class="fal fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<br/>
@endsection
