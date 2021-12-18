<header class="header_area">
    <div class="header_navbar navbar_position">
        <div class="container">
            <div class="nav">
                <input type="checkbox" id="nav-check">
                <div class="nav-btn">
                    <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
                <div class="nav-header">
                    <a class="navbar-brand" href="{{route('frontend.index')}}"> <img src="{{asset('assets/frontend/images/public_market.png')}}" alt="logo"> </a>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="{{route('frontend.index')}}" class="active">Home <span class="line"></span></a></li>
                        <li><a href="{{route('frontend.category')}}">Categories<i class="fa fa-angle-down navicon"></i></a>
                            <ul class="sub-menu1">
                                <li><a href="{{route('frontend.ad.mobile')}}"><i class="fal fa-mobile-alt"></i>&nbsp;Mobile</a></li>
                                <li><a href="{{route('frontend.ad.electronics')}}"><i class="fal fa-plug"></i>&nbsp;Electronics</a></li>
                                <li><a href="{{route('frontend.ad.home')}}"><i class="fal fa-home-lg"></i>&nbsp;Home & Living</a></li>
                                <li><a href="{{route('frontend.ad.transportation')}}"><i class="fal fa-truck-pickup"></i>&nbsp;Vehicles & Transportation</a></li>
                                <li><a href="{{route('frontend.ad.daily')}}"><i class="fal fa-cannabis"></i>&nbsp;Daily Needs & Grocery</a></li>

                                <li><a href="{{route('frontend.ad.hobby')}}"><i class="fal fa-golf-ball"></i>&nbsp;Hobbies, Sports & Babies</a></li>
                                <li><a href="#"><i class="fal fa-chart-bar"></i>&nbsp;Local Business Point</a></li>

                                <li><a href="{{route('frontend.ad.fashion')}}"><i class="fal fa-tshirt"></i>&nbsp;Garments & Clothing</a></li>

                                <li><a href="{{route('frontend.ad.agriculture')}}"><i class="fal fa-tractor"></i>&nbsp;Agriculture & Agro Products</a></li>

                                <li><a href="{{route('frontend.ad.education')}}"><i class="fal fa-user-graduate"></i>&nbsp;Education</a></li>
                                <li><a href="#"><i class="fal fa-gas-pump"></i>&nbsp;Fuel, Oil & Gas</a></li>
                                <li><a href="#"><i class="fal fa-procedures"></i>&nbsp;Rent/To-let</a></li>
                                <li><a href="#"><i class="fal fa-business-time"></i>&nbsp;Business & Industry</a></li>
                                <li><a href="{{route('frontend.ad.property')}}"><i class="fal fa-warehouse"></i>&nbsp;Real State & Property</a></li>

                                <li><a href="#"><i class="fal fa-utensils-alt"></i>&nbsp;PM Food Bank & Restaurants</a></li>
                                <li><a href="#"><i class="fal fa-person-sign"></i>&nbsp;Personal Advertisement</a></li>
                                <li><a href="#"><i class="fal fa-compress-arrows-alt"></i>&nbsp;Companies Product Branding</a></li>
                                <li><a href="#"><i class="fal fa-satellite-dish"></i>&nbsp;Resort, Hotel & Community Centre</a></li>
                                <li><a href="{{route('frontend.ad.service')}}"><i class="fal fa-cog"></i>&nbsp;Services</a></li>
                                <li><a href="{{route('frontend.ad.pet')}}"><i class="fal fa-paw"></i>&nbsp;Pet & Animals</a></li>
                                <li><a href="#"><i class="fal fa-bus"></i>&nbsp;Tour & Travels</a></li>


                                <li><a href="{{route('frontend.ad.fashion')}}"><i class="fal fa-walking"></i>&nbsp;Health & Beauty</a></li>
                                <li><a href="#"><i class="fal fa-project-diagram"></i>&nbsp;Others</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.tvc')}}">TVC<i class="fa fa-angle-down navicon"></i></a>
                            <ul class="sub-menu2">
                                <li><a href="{{route('tvc.upload')}}"><i class="fal fa-upload"></i>&nbsp;Upload TVC</a></li>
                                <li><a href="{{route('frontend.featured-tvc')}}"><i class="fal fa-tv-retro"></i>&nbsp;TVC Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Job Bank<i class="fa fa-angle-down navicon"></i></a>
                            <ul class="sub-menu2">
                                <li><a href="{{route('frontend.cvupload')}}"><i class="fal fa-copy"></i>&nbsp;Cv Upload</a></li>
                                <li><a href="{{route('frontend.vacancy')}}"><i class="fal fa-bullhorn"></i>&nbsp;Vacancy Announcement</a></li>
                                <li><a href="{{route('frontend.cvbank')}}"><i class="fal fa-user-tie"></i>&nbsp;Cv Bank</a></li>
                                <li><a href="{{route('frontend.job.index')}}"><i class="fal fa-briefcase"></i>&nbsp;Jobs</a></li>
                            </ul>
                        </li>
                        <li class="loginlist"><a href="{{route("frontend.signin")}}"><i class="fas fa-user navusericon"></i>Login</a></li>
                        <li><a href="#" class="dddddd">বাংলা</a></li>

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
                        <li><a class="view-count" href="{{route('frontend.all-ads')}}"><span class="line"></span> <i class="fas fa-ad show"></i> 30M</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>


