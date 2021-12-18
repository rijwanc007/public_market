@extends('frontend.master')
@section('title','Store Name | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Store Name</h3>
                        <p>
                            One Liner About Store And It's Products
                        </p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#store">View Store</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="product_page pt-30 pb-120" id="store">
    <div class="container">
        <div class="row ad-wrapper">
            <div class="col-lg-3">
                <div class="product_sidebar pt-3">
                    <div class="sidebar_price_range mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Store Name</h5>
                        </div>
                        <div class="store-image-preview-wrapper">
                            <img class="img-fluid" src="{{asset('assets/frontend/images/ads-9.png')}}">
                            <p class="pt-100 text-center">
                                Small Description Of The Store
                            </p>
                            <h6 class="text-center pt-20"> Member Since 2021 </h6>
                        </div>
                    </div>
                    <div class="sidebar_discount mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Store details</h5>
                        </div>
                        <div class="discount_content">
                            <div class="row pt-10 justify-content-center pb-10 online-row">
                                <div class="col-1 online-indicator">
                                    <button class="btn online-btn mt-1"></button>
                                </div>
                                <div class="col-10">
                                   <p> Store Is Open </p>
                                </div>
                            </div>
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
                                    <img src="{{asset('assets/frontend/images/ads-9.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Transportation</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Nomet Cycle</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Dhaka, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳29,999.00</span>
                                        <span class="date">25 Jan, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30 spotlight">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-10.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Samsung Galaxy S8</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Chittagong, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳33,000.00</span>
                                        <span class="date">22 May, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-11.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}"> LG V30</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Khulna, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳12,000.00</span>
                                        <span class="date">12 March, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-12.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Samsung Galaxy Note9</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Sylhet, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳35,000.00</span>
                                        <span class="date">28 April, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/bike.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Transportation</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">KTM 800cc Bike</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Rangpur, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳345,000.00</span>
                                        <span class="date">5 June, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/laptop.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Ram & Laptop</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Macbook Pro - 8GB / 256GB </a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Mymensingh, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳60,000.00</span>
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

@endsection
