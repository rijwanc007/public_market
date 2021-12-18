@extends('frontend.master')
@section('title','Post Rent To-Let Ad | PublicMarket')
@section('content')
    <div class="header_content post_cover" >
        <div class="container ">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Post Rent To-Let Ad</h3>
                        <p> Post An Ad In These Easy Steps. If You Have Any Confusion About Pricing And Quick Selling Trips Go Ahead And Read Our Advices on How To Sell Fast  And Blogs Or Checkout The FAQ Section.  </p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#tolet">Post Rent To-Let Ad</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.section.ad-rent-to-let')

    <br/>
@endsection
