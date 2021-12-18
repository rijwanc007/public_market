@extends('frontend.master')
@section('title','Category | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">All Categories</h3>
                    <p>We Have A Diverse Collection Of Products Arranged In Neat Categories For Your Accessibility.</p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#category">Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.all-category')
<br/>
@endsection

