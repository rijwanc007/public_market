@extends('frontend.master')
@section('title','District | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">All Districts Of Dhaka</h3>
                    <p>We Are Available In All Of The Major Cities And Districts In Dhaka.</p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#district">Districts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.section.all-district')

<br/>
@endsection
