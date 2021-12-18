@extends('frontend.master')
@section('title','Location Ad | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Dhaka</h3>
                    <p> We Have Collected All The Ads Inside Dhaka City In One Place. Find All The Ads According To Your Location </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#ads">All Ads</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.section.location-filter')

<br/>
@endsection
