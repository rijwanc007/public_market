@extends('frontend.master')
@section('title','FAQ | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">FAQ</h3>
                    <p> We Have Assorted Some Frequently Asked Questions And Answered Them. If You Have Any Question
                        Have A Look We Might've Already Answered It. </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#faq">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.faq-accordion')

<br/>
@endsection
