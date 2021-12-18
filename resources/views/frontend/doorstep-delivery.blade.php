@extends('frontend.master')
@section('title','Doorstep Delivery | PublicMarket')
@section('content')
<div class="header_content bg_strat_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Doorstep Delivery</h3>
                        <p> Doorstep Delivery option is available for our select premium sellers, which assures your safety and your convenience. Get your desired product sitting at your home's comfort and get delivery from our delivery service. </p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#doorstep">Doorstep Delivery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('frontend.section.doorstep-delivery')
@endsection
