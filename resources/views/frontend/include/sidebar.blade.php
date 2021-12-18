<div class=col-lg-4>
    <div class="mt-50 sidebar_profile">
        <div class=profile_user>
            <div class="d-flex align-items-center user_author">
                <div class=author>
                    <img src={{asset('assets/frontend/images/user-1.jpg')}} alt="">
                </div>
                <div class="media-body user_content">
                    <p class=author_name>Dummy Name</p>
                    <p>User</p>
                </div>
            </div>
            <div class=user_list>
                <ul>
                    <li><a class="{{$dashboard}}" href="{{route('frontend.dashboard')}}"><i class="fal fa-tachometer-alt-average"></i>Dashboard</a></li>
                    <li><a class="{{$settings}}" href={{route('frontend.profile-settings')}}><i class="fal fa-cog"></i>Profile Settings</a></li>
                    <li><a class="{{$professional}}" href={{route('frontend.profile-professional')}} ><i class="fal fa-user-tie"></i>Professional Profile</a></li>
                    <li><a class="{{$ads}}" href={{route('frontend.my.ads')}}><i class="fal fa-layer-group"></i>My Ads</a></li>
                    <li><a class="{{$message}}" href={{route('frontend.message')}}><i class="fal fa-envelope"></i>Offers/Messages</a></li>
                    <li><a class="{{$payment}}" href={{route('frontend.payment')}}><i class="fal fa-wallet"></i>Payments</a></li>
                    <li><a class="{{$favourite}}" href={{route('frontend.favourite')}}><i class="fal fa-heart"></i>My Favourites</a></li>
                    <li><a class="{{$privacy}}" href={{route('frontend.privacy')}}><i class="fal fa-star"></i>Privacy Settings</a></li>
                    <li><a href={{route('frontend.signin')}}><i class="fal fa-sign-out"></i>Sign Out</a></li>
                    <li><a href="{{route('frontend.post-ad')}}"><i class="fal fa-plus-circle"></i>Post An Ad</a></li>
                    <li><a class="{{$member}}" href="{{route('frontend.dash.member')}}"><i class="fal fa-portrait"></i>Become A Member</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar_profile mt-30" id=sidebar_cv>
        <div class=profile_user>
            <div class=post_title>
                <h5 class=title>My CV</h5>
            </div>
            <div class=user_list>
                <ul>
                    <li><a href={{route('frontend.cvupload')}}><i class="fal fa-file-upload"></i>Upload CV</a></li>
                    <li><a href={{asset('frontend')}}assets/images/dummy_cv.pdf target=_blank><i class="fal fa-copy"></i>Preview CV</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar_profile mt-30">
        <div class=profile_user>
            <div class=post_title>
                <h5 class=title>Featured Ad</h5>
            </div>
            <div class=user_list>
                <div class="professional-side-ad pt-20 ">
                    <img src="{{asset('assets/frontend/images/pro-sidebar-ad.jpg')}}" />
                </div>
            </div>
        </div>
    </div>
</div>
