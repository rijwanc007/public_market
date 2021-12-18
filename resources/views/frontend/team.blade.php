@extends('frontend.master')
@section('title','Team | PublicMarket')
@section('content')
<div class="header_content team_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Our Team</h3>
                    <p> We Have An Impressive Ensemble Of Employees , That Ensure Your Every Demand Is Filled. We Are Always Hard At Work To Make Your Every Experience Better. Get To Know Us Better  </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#teams">Know Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.team-members')
<br/>
@endsection
