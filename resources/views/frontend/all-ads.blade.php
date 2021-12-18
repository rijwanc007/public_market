@extends('frontend.master')
@section('title','All Ads | PublicMarket')
@section('content')
<div class="ad-container container mt-80">
    <img class="img-fluid" src="{{asset('assets/frontend/images/ad-background.jpg')}}" />
</div>
<div class="container doorstep-banner mt-40">
        <div class="row">
            <div class="col-sm-8">
              <h4 class="text-center"><i class="fas fa-truck-container"></i>  View All The Ads With Doorstep Delivery Perks</h4>
            </div>
            <div class="col-sm-3">
                <a href="{{route('frontend.doorstep.deals')}}">
                <button class="btn main-btn btn-block">
                    View All
                </button>
                </a>
            </div>
        </div>
</div>
@include('frontend.section.ad-list')
<br/>
@endsection
