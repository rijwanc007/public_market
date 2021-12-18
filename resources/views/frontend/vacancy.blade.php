@extends('frontend.master')
@section('title','Vacancy | Publicmarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Vacancy Announcement</h3>
                    <p>Announce Vacancy On This Platform. Get All The Applicants Needed For Your Company. Review CV And Review Their Professional Profile To Choose The Right Fit.</p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#vacancy">Announce Vacancy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.section.vacancy-announcement')
<br/>
@endsection
