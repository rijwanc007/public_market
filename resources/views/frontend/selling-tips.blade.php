@extends('frontend.master')
@section('title','Selling Tips | PublicMarket')
@section('content')
    <div class="header_content safe_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Selling Tips</h3>
                        <p> Below are some tips on how to post ads that attract a lot of buyer interest. </p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#SellingTips">Selling Tips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.section.selling-tips')
    <br />
@endsection
