@extends('frontend.master')
@section('title','Location | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">All Location</h3>
                    <p>We Are Currently Accessible As Reliable Classified Platform In All Of The Divisions.</p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#location">Locations</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.section.all-location')

<br/>
@endsection
