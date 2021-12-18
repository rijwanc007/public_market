<section class="locations_area pt-115 pb-120" id="Locations">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title pb-15">
                    <h3 class="title">Explore Popular Locations</h3>
                </div>
            </div>
        </div>
        <div class="locations_wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_locations mt-30">
                        <div class="locations_image"> <img src="{{asset('assets/frontend/images/Dhaka.jpg')}}" alt="Locations"> </div>
                        <div class="locations_content">
                            <h5 class="title"><a href="{{route('frontend.district')}}"><i class="far fa-map-marker-alt"></i>Dhaka</a></h5>
                            <p>29 ads posted in this location</p> <a class="view" href="{{route('frontend.location-ad')}}">View All Ads Here <i class="fa fa-angle-right"></i></a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_locations mt-30">
                        <div class="locations_image"> <img src="{{asset('assets/frontend/images/Chittagong.jpg')}}" alt="Locations"> </div>
                        <div class="locations_content">
                            <h5 class="title"><a href="{{route('frontend.district')}}"><i class="far fa-map-marker-alt"></i>Chittagong</a></h5>
                            <p>16 ads posted in this location</p> <a class="view" href="{{route('frontend.location-ad')}}">View All Ads Here <i class="fa fa-angle-right"></i></a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_locations mt-30">
                        <div class="locations_image"> <img src="{{asset('assets/frontend/images/Rajshahi.jpg')}}" alt="Locations"> </div>
                        <div class="locations_content">
                            <h5 class="title"><a href="{{route('frontend.district')}}"><i class="far fa-map-marker-alt"></i>Rajshahi</a></h5>
                            <p>9 ads posted in this location</p> <a class="view" href="{{route('frontend.location-ad')}}">View All Ads Here <i class="fa fa-angle-right"></i></a> </div>
                    </div>
                </div>
            </div>
            <div class="locations_btn text-center"> <a class="main-btn" href="{{route('frontend.location')}}">View all Locations</a> </div>
        </div>
    </div>
</section>
