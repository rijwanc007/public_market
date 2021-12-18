@extends('frontend.master')
@section('title','Tips | PublicMarket')
@section('content')
<div class="header_content tips_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper tips_menu">
                    <h3 class="title">Tips On Operating On Our Platform</h3>
                    <p> We Know It Can Be Daunting To Present Yourself Or Buy Something Or General Browsing. What Should Be the Optimum Price? What Behaviours Can Be Identified As Red Flags As Buyer/Seller.
                        For All Of These Questions And More , We're Here To Present You With Some Hacks.
                    </p>
                    <ul class="header_btn">
                        <li><a href="#quick">Buy & Sell Quickly</a></li>
                        <li><a href="#sellTips">Selling Tips</a></li>
                        <li><a href="#priceTips">Pricing Tips</a></li>
                        <li><a href="#proTips">Professional Tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.quick')
@include('frontend.section.sell-tips')
@include('frontend.section.price-tips')
@include('frontend.section.pro-tips')
<br/>
@endsection
