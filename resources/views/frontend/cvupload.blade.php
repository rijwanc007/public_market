@extends('frontend.master')
@section('title','Cv Upload | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Upload Your CV</h3>
                    <p>Upload Your CV For Applying On Vacancies</p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#cv">Upload CV</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.section.cvupload')

<br/>
@endsection
