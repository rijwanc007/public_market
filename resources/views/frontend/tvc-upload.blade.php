@extends('frontend.master')
@section('title','tvc-upload | PublicMarket')
@section('content')
    <div class="header_content team_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="content_wrapper">
                        <h3 class="title">Upload TVC</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="header_btn">
                            <li><a class="main-btn" href="#tvc-upload">Announce TVC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.section.tvc-form')
    <br/>
@endsection
