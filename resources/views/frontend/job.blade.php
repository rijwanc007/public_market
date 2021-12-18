@extends('frontend.master')
@section('title','Job | PublicMarket')
@section('content')
    <div class="header_content  contact_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">All Job</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#job">See All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.section.all-job')
    <br/>
@endsection
