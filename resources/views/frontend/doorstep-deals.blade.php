@extends('frontend.master')
@section('title','Door Step All | PublicMarket')
@section('content')
    <div class="header_content tips_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Door Step All Deals</h3>
                        <p>
                            Door Step all deals and popular deals in one place with secured delivery guaranteed.
                        </p>
                        <ul class="header_btn">
                            <li><a class="main-btn button-margin" href="#all-deals">All Deals</a></li>
                            <li><a class="main-btn-2 main-btn button-margin" href="#all-stores">All Stores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.section.doorstep-all-deals')
    <br />
@endsection
