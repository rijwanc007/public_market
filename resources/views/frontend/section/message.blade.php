<section class="dashboard_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'','message'=>'active','member'=>'','ads'=>''])
            <div class="col-lg-8 col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                        <div class="dashboard_content mt-50">
                            <div class="post_title">
                                <h5 class="title">Inbox</h5>
                            </div>
                            <div class="pt-10">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search For A User" aria-label="Search">
                                    <button class="btn btn-inverse-success" type="submit"><i class="fal fa-search"></i></button>
                                </form>
                            </div>
                            <div class="inbox-list mt-10 pt-10 pb-10 pl-1 pr-1">
                                <div class="user_list message-list overflow-auto">
                                    <ul>
                                        <li class="message-dash message-unread pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 1</span>
                                                <span class="message-dash-date">30 mins</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                                <span class="message-dash-unread-count">3</span>
                                            </a>
                                        </li>
                                        <li class="message-dash message-unread pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 1</span>
                                                <span class="message-dash-date">1 hour</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                                <span class="message-dash-unread-count">2</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2" src="{{asset('assets/frontend/images/blog-1.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 2</span>
                                                <span class="message-dash-date">2 hour</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2" src="{{asset('assets/frontend/images/blog-1.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 2</span>
                                                <span class="message-dash-date">1 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 3</span>
                                                <span class="message-dash-date">2 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 3</span>
                                                <span class="message-dash-date">5 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2" src="{{asset('assets/frontend/images/blog-1.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 2</span>
                                                <span class="message-dash-date">1 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 3</span>
                                                <span class="message-dash-date">2 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                        <li class="message-dash pt-1 mt-1 pb-1 mb-1">
                                            <a href="{{route('frontend.message')}}">
                                                <img class="mt-2 mb-2"  src="{{asset('assets/frontend/images/blog-2.jpg')}}"/>
                                                <span class="message-dash-name">Dummy Messager 3</span>
                                                <span class="message-dash-date">5 days</span>
                                                <span class="message-dash-detail">Some Message Detail...</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                        <div class="dashboard_content mt-50">
                            <div class="post_title">
                                <h5 class="title">Dummy Messager 1</h5>
                            </div>
                            <div class="inbox-messages mt-10 pt-10 pb-10">
                                <div class="user_list message-list overflow-auto">
                                    <ul>
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                </div>
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Interested Party</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pt-20 pb-20">
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Selling Party</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/user-1.jpg')}}"/>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                </div>
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Interested Party</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pt-20 pb-20">
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Selling Party</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/user-1.jpg')}}"/>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                </div>
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Interested Party</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pt-20 pb-20">
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Selling Party</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/user-1.jpg')}}"/>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/author-1.jpeg')}}"/>
                                                </div>
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Interested Party</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="pt-20 pb-20">
                                        <li>
                                            <div class="row justify-content-around message-list-row">
                                                <div class="col-9 message-content">
                                                    <p> Some Message Content Sent By The Selling Party</p>
                                                </div>
                                                <div class="col-2">
                                                    <img src="{{asset('assets/frontend/images/user-1.jpg')}}"/>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inbox-message-send pt-10 pb-10">
                                <div class="row justify-content-end">
                                    <div class="col-10">
                                        <textarea type="text" rows="1" placeholder="Type In Message" style="resize: none;"></textarea>
                                    </div>
                                    <div class="col-2 send-btn">
                                        <button class="btn btn-inverse-danger "><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
