<section class="dashboard_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'active','settings'=>'','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','member'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="dashboard_content mt-50">
                            <div class="post_title">
                                <h5 class="title">Dashboard</h5>
                            </div>
                            <div class="row justify-content-center mt-60 mb-20">
                                <div class="col-sm-10">
                                    <div class="card">
                                        <div class="card-body user-card">
                                            <div class="user-image-thumb">
                                                <img src="{{asset('assets/frontend/images/user-1.jpg')}}">
                                            </div>
                                            <div class="user-content pt-30">
                                                <h5 class="text-center"> Dummy Name</h5>
                                                <p class="text-center"> Dummy@dummy.com</p>
                                                <p class="text-center pt-10"><i class="far fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dash-professional-div">
                                        <a href="{{route('frontend.profile-professional')}}">
                                            <button class="btn professional-btn text-center mt-20">
                                                View Professional Profile
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dashboard_content message-content mt-50" id="message">
                            <div class="post_title">
                                <h5 class="title">Messages <span class="message-unread-count"><a href="{{route('frontend.message')}}">2</a></span></h5>
                            </div>
                            <div class="user_list message-list overflow-auto">
                                <ul>
                                    <li class="message-dash message-unread pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 1</span>
                                            <span class="message-dash-date">30 mins ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                    <li class="message-dash message-unread pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 1</span>
                                            <span class="message-dash-date">1 hour ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                    <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2" src="{{asset('assets/frontend/images/blog-1.jpg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 2</span>
                                            <span class="message-dash-date">2 hour ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                    <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2" src="{{asset('assets/frontend/images/blog-1.jpg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 2</span>
                                            <span class="message-dash-date">1 days ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                    <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 3</span>
                                            <span class="message-dash-date">2 days ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                    <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                        <a href="{{route('frontend.message')}}">
                                            <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                            <span class="message-dash-name">Dummy Messager 3</span>
                                            <span class="message-dash-date">5 days ago</span>
                                            <span class="message-dash-detail">Some Message Detail...</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard_content mt-50">
                    <div class="post_title">
                        <h5 class="title">Statistics</h5>
                    </div>
                    <div class="row justify-content-around mt-10 mb-10">
                        <div class="col-md-3 col-sm-6 equal-height card-1 text-center mt-10">
                            <a href="{{route('frontend.my.ads')}}">
                                <div class="item">
                                    <i class="far fa-check-circle stat-icon"></i>
                                    <h4 class="pt-10">Ads Posted</h4>
                                    <h6 class="text-center pt-10">50</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 equal-height card-2 text-center mt-10">
                            <a href="{{route('frontend.my.ads')}}">
                                <div class="item">
                                    <i class="far fa-rocket stat-icon"></i>
                                    <h4 class="pt-10">Boosted Ads</h4>
                                    <h6 class="text-center pt-10">30</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 equal-height card-3 text-center mt-10" >
                            <a href="{{route('frontend.message')}}">
                                <div class="item">
                                    <i class="far fa-comment-alt-lines stat-icon"></i>
                                    <h4 class="pt-10">Messages</h4>
                                    <h6 class="text-center pt-10">90</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pt-10 row justify-content-center"><div class="col-2"> <button class="main-btn">Logout</button> </div>  </div>
            </div>
        </div>
    </div>
    </div>
</section>
