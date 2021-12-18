@extends('frontend.master')
@section('title','Live Chat | PublicMarket')
@section('content')
    <div class="header_content  contact_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Live Chat</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#livechat">Start Live Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.section.live-chat')
    <br/>
@endsection

