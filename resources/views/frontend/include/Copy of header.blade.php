<header class="header_area">
    <div class="header_navbar navbar_position">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('frontend.index')}}"> <img src="{{asset('assets/frontend/images/logo.png')}}" alt="logo"> </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li> <a class="active" href="{{route('frontend.index')}}">Home <span class="line"></span></a> </li>
                        <li> <a href="{{route('frontend.category')}}">Categories <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                <li class="category-menu"><a href="{{route('frontend.ad.mobile')}}">Mobile</a></li>
                                <li  class="category-menu"> <a href="{{route('frontend.ad.electronics')}}">Electronics</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.home')}}">Home & Living</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.transportation')}}">Vehicles & Transportation</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.daily')}}">Daily Needs & Grocery</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.fashion')}}">Health & Beauty</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.fashion')}}">Garments & Clothing</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.hobby')}}">Hobbies, Sports & Babies</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.agriculture')}}">Agriculture & Agro Products</a></li>
                                <li class="category-menu"><a href="#">Business & Industry</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.education')}}">Education</a></li>
                                <li class="category-menu"><a href="#">Fuel, Oil & Gas</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.property')}}">Real State & Property</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.pet')}}">Pet & Animals</a></li>
                                <li class="category-menu"><a href="#">PM Food Bank & Restaurants</a></li>
                                <li class="category-menu"><a>Personal Advertisement</a></li>
                                <li class="category-menu"><a>Companies Product Branding</a></li>
                                <li class="category-menu"><a href="{{route('frontend.ad.service')}}">Services</a></li>
                                <li class="category-menu"><a href="#">Tour & Travels</a></li>
                                <li class="category-menu"><a href="#">Local Business Point</a></li>
                                <li class="category-menu"><a href="#">Resort, Hotel & Community Centre</a></li>
                                <li class="category-menu"><a href="#">Rent/To-let</a></li>
                                <li class="category-menu"><a href="#">Others</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{route('frontend.tvc')}}">TVC<i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('tvc.upload')}}">Upload TVC</a></li>
                                <li><a href="{{route('frontend.featured-tvc')}}">TVC Videos</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Job Bank<i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('frontend.cvupload')}}"><i class="fal fa-copy"></i>Cv Upload</a></li>
                                <li><a href="{{route('frontend.vacancy')}}"><i class="fal fa-bullhorn"></i>Vacancy Announcement</a></li>
                                <li><a href="{{route('frontend.cvbank')}}"><i class="fal fa-user-tie"></i>Cv Bank</a></li>
                                <li><a href="{{route('frontend.job.index')}}"><i class="fal fa-user-tie"></i>Jobs</a></li>
                            </ul>
                        </li>
{{--                        <li><a class="language-btn" href="#">Language<i class="fa fa-angle-down"></i> <span class="line"></span></a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="#">Bangla</a></li>--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <button type="button" class="btn_bangla">বাংলা</button>--}}
{{--                        </li>--}}
                        <li>
                            <a href="{{route("frontend.signin")}}"><i class="fas fa-user"></i> Login</a>
                        </li>
                        <li>
                            <div class="row restricted-li">
                                <div class="col-12">
                                    <a class="view-count" href="#"><span class="line"></span> <i class="fas fa-eye show"></i> 20M</a>
                                </div>
                                <div class="col-12">
                                    <a class="ad-count" href="{{route('frontend.all-ads')}}"><span class="line"></span> <i class="fas fa-ad show"></i> 30M</a>
                                </div>
                            </div>
                        </li>
                        <div class="responsivebtn">
                            <ul>
                                <li><a class="monav" href="#">বাংলা</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
                <div class="navbar_btn">
                    <ul>
                        <li><a class="sign-up invi-button" href="#">বাংলা</a></li>
                        <li><a class="sign-up invi-button" href="{{route('frontend.all-ads')}}">All Ads</a></li>
                        <li><button type="button" class="sign-up no-border"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Post Ads</button></li>
                    </ul>
                </div>
                <div class="right_menu_mobile">
                    <ul>
                        <li><a href="{{route("frontend.signin")}}"><i class="fas fa-user"></i></a></li>
                        <li><a class="view-count" href="#"><span class="line"></span> <i class="fas fa-eye show"></i> 20M</a></li>
                        <li><a href="{{route('frontend.all-ads')}}"><i class="fas fa-ad" style="font-size: 24px"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


