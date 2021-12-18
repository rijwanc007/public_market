@extends('frontend.master')
@section('title','Mission & Vision | PublicMarket')
@section('content')
<div class="header_content mission_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Mission & Vision</h3>
                    <p> Our Mission Is To Provide An Unparalleled Service To Our Customers Paired With Trust And Reliability. Enjoy A Marketplace Experience Like None Other. </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#mission">Our Mission</a></li>
                        <li><a class="main-btn main-btn-2" href="#vision">Our Vision</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.mission')
@include('frontend.section.vision')
<br/>
@endsection
