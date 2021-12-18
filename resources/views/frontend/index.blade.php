@extends('frontend.master')
@section('title','Index | PublicMarket')
@section('content')

<div class="header_content bg_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="row justify-content-around">
                    <div class="col-lg-7">
                        <div class="content_wrapper">
                            <h3 class="title">Welcome to PublicMarket</h3>
                            <p>Buy And Sell Everything From Used Cars To Mobile Phones And Computers, Or Search For Property, Jobs And More.Bringing All Of These To Your Fingertips Is PublicMarket.The Way Toward Buying And Selling Is Only One Click Away</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <video class="auto-tv" muted autoplay controls>
                            <source src="{{asset('assets/frontend/images/bg_video.mp4')}}" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_search">
            <form action="#">
                <div class="search_wrapper d-flex flex-wrap">
                    <div class="search_column d-flex flex-wrap">
                        <div class="search_select dropdown mt-15">
                            <button type="button" class="dropbtn">Select Location</button>
                            <div class="dropdown-content">
                                <p class="deactive">Select a location</p> <a href="{{route('frontend.district')}}">Barishal</a> <a href="{{route('frontend.district')}}">Chittagong</a> <a href="{{route('frontend.district')}}">Dhaka</a> <a href="{{route('frontend.district')}}">Mymensingh</a> <a href="{{route('frontend.district')}}">Khulna</a> <a href="{{route('frontend.district')}}">Rajshahi</a> <a href="{{route('frontend.district')}}">Rangpur</a> <a href="{{route('frontend.district')}}">Sylhet</a> </div> <i class="far fa-map-marker-alt drop-image"></i> </div>
                        <div class="search_select mt-15 dropdown">
                            <button type="button" class="dropbtn">Select Category</button>
                            <div class="dropdown-content">
                                <p class="deactive">Select a Category</p> <a href="{{route('frontend.ad.electronics')}}">Electronics</a> <a href="{{route('frontend.ad.mobile')}}">Mobile</a> <a href="{{route('frontend.ad.home')}}">Home & Living</a> <a href="{{route('frontend.ad.transportation')}}">Transportation</a> <a href="{{route('frontend.ad.pet')}}">Pet & Animals</a> <a href="{{route('frontend.ad.property')}}">Property</a> <a href="{{route('frontend.ad.fashion')}}">Fashion & Beauty</a> <a href="{{route('frontend.ad.hobby')}}">Hobby,Sports & Baby</a> <a href="{{route('frontend.ad.daily')}}">Daily Needs & Grocery</a> <a href="{{route('frontend.ad.factory')}}">Factory & Industry</a> <a href="{{route('frontend.ad.education')}}">Education</a> <a href="{{route('frontend.ad.job')}}">Job</a> <a href="{{route('frontend.ad.service')}}">Services</a> <a href="{{route('frontend.ad.agriculture')}}">Agricultural Products</a> <a href="{{route('frontend.all-ads')}}">Foreign Jobs</a> </div> <i class="far fa-tags drop-image"></i> </div>
                    </div>
                    <div class="search_column d-flex flex-wrap">
                        <div class="search_form mt-15">
                            <input class="search" type="text" placeholder="Type Your Keyword"> <i class="far fa-i-cursor drop-image"></i> </div>
                        <div class="search_btn mt-15">
                            <button class="main-btn">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="header_keyword d-sm-flex"> <span class="title">Trending Keywords:</span>
                <ul class="tags media-body">
                    <li><a href="#">Camera</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">DSLR</a></li>
                    <li><a href="#">Packet</a></li>
                    <li><a href="#">Dress</a></li>
                    <li><a href="#">Shirt</a></li>
                    <li><a href="#">Pant</a></li>
                    <li><a href="#">Shoe</a></li>
                    <li><a href="#">Table</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.category-preview')
@include('frontend.section.popular-ads')
@include('frontend.section.location-preview')
@include('frontend.section.recent-ads')
@include('frontend.section.services')
@include('frontend.section.tvc-preview')
@endsection
