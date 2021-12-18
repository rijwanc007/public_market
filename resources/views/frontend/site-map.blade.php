@extends('frontend.master')
@section('title','Site Map | PublicMarket')
@section('content')
<div class="header_content sitemap_cover" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Site Map</h3>
                    <p> We Present You With A Complete And Convenient Overview Of Our WebSite. We Have Gathered Every Link To Our Website So That You Can Have A Reference And Find WHAT YOU WAnt Easily.  </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#overview">Overview</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.site-overview')
<br />
@endsection
