<section class="post_ads_page pt-70 pb-120" id="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar_profile mt-50">
                    <div class="profile_user">
                        <div class="user_author d-flex align-items-center">
                            <div class="author">
                                <img src="{{asset('assets/frontend/images/user-1.jpg')}}" alt="">
                            </div>
                            <div class="user_content media-body">
                                <p class="author_name">Dummy Name</p>
                                <p>User</p>
                            </div>
                        </div>
                        <div class="user_list">
                            <ul>
                                <li><a href="{{route('frontend.dashboard')}}"><i class="fal fa-tachometer-alt-average"></i> Dashboard</a></li>
                                <li><a href="{{route('frontend.profile-settings')}}"><i class="fal fa-cog"></i> Profile Settings</a></li>
                                <li><a href="{{route('frontend.profile-professional')}}"><i class="fal fa-user-tie"></i> Professional Profile</a></li>
                                <li><a href="{{route('frontend.my.ads')}}"><i class="fal fa-layer-group"></i> My Ads</a></li>
                                <li><a href="{{route('frontend.message')}}"><i class="fal fa-envelope"></i> Offers/Messages</a></li>
                                <li><a href="{{route('frontend.payment')}}"><i class="fal fa-wallet"></i> Payments</a></li>
                                <li><a href="{{route('frontend.favourite')}}"><i class="fal fa-heart"></i> My Favourites</a></li>
                                <li><a href="{{route('frontend.privacy')}}"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                <li><a href="{{route('frontend.signin')}}"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                <li><a class="active" href="{{route('frontend.post-ad')}}"><i class="fal fa-plus-circle"></i>Post An Ad</a></li>
                                <li><a href="#"><i class="fal fa-portrait"></i>Become A Member</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sidebar_profile mt-30" id="sidebar_cv">
                    <div class="profile_user">
                        <div class="post_title">
                            <h5 class="title">My CV</h5>
                        </div>
                        <div class="user_list">
                            <ul>
                                <li><a href="{{route('frontend.cvupload')}}"><i class="fal fa-file-upload"></i>Upload CV</a></li>
                                <li><a href="{{asset('assets/frontend/images/dummy_cv.pdf')}}" target="_blank"><i class="fal fa-copy"></i>Preview CV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Ad Detail</h5>
                    </div>
                    <form action="#">
                        <div class="single_form">
                            <label>Ad title  </label>
                            <input id="title" type="text" placeholder="Keep It Short And Informative">
                        </div>
                        <div>
                            <p class="mt-20">
                                **Selected Category Will Be Inserted here**
                            </p>
                        </div>
                        <div class="single_form">
                            <p>Platform</p>
                            <input type="text" placeholder="Android/Ios">
                        </div>
                        <div class="single_form">
                            <p>Product Name</p>
                            <input type="text" placeholder="Enter Product Name">
                        </div>
                        <div class="single_form">
                            <p>Brand</p>
                            <input type="text" placeholder="Enter Brand ">
                        </div>
                        <div class="single_form">
                            <p>Category</p>
                            <input type="text" placeholder="Enter Category ">
                        </div>
                        <div class="single_form">
                            <p>Processor</p>
                            <input type="text" placeholder="Enter Processor ">
                        </div>
                        <div class="single_form">
                            <p>RAM</p>
                            <input type="text" placeholder="Enter RAM ">
                        </div>
                        <div class="single_form">
                            <p>Storage</p>
                            <input type="text" placeholder="Enter Storage ">
                        </div>
                        <div class="single_form">
                            <p>Color</p>
                            <input type="text" placeholder="Enter Color ">
                        </div>
                        <div class="single_form">
                            <p>Battery</p>
                            <input type="text" placeholder="Enter Battery ">
                        </div>
                        <div class="single_form">
                            <p>Charging Power</p>
                            <input type="text" placeholder="Enter Charging Power ">
                        </div>
                        <div class="single_form">
                            <p>Display</p>
                            <input type="text" placeholder="LCD 6.2inch ">
                        </div>
                        <div class="single_form">
                            <p>Camera</p>
                            <input type="text" placeholder="Front 5mp and Main 12mp">
                        </div>
                        <div class="single_form">
                            <p>Connectivity</p>
                            <input type="text" placeholder="4G,3G,Bluetooth 5.0">
                        </div>
                        <div class="single_form">
                            <p>Features</p>
                            <input type="text" placeholder="Touch Screen, Finger Print Scanner">
                        </div>
                        <div class="single_form">
                            <p>Weight</p>
                            <input type="text" placeholder="Enter Weight">
                        </div>
                        <div class="single_form">
                            <p>Price</p>
                            <input type="text" placeholder="Enter price ">
                        </div>
                        <div class="single_form">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox"></label>
                            <span>Price On Call</span>
                        </div>
                        <div class="single_form">
                            <textarea placeholder="Ad Post"></textarea>
                        </div>
                        <div class="post_upload_file">
                            <label for="upload">
                                <span>Drop files anywhere to upload</span>
                                <span>Or</span>
                                <span class="main-btn">Select Files</span>
                                <span>Maximum upload file size: 500 KB</span>
                                <input type="file" id="upload">
                            </label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar_post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Contact Detail</h5>
                    </div>
                    <form action="#">
                        <div class="single_form">
                            <ul>
                                <li>
                                    <input type="radio" checked="" name="radio" id="radio1">
                                    <label for="radio1"></label>
                                    <span>Same User</span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio2">
                                    <label for="radio2"></label>
                                    <span>Someone Else</span>
                                </li>
                            </ul>
                        </div>
                        <div class="single_form">
                            <p>First Name*</p>
                            <input type="text" placeholder="">
                        </div>
                        <div class="single_form">
                            <p>Last Name*</p>
                            <input type="text" placeholder="">
                        </div>
                        <div class="single_form">
                            <p>Phone*</p>
                            <input type="text" placeholder="">
                        </div>
                        <div class="single_form">
                            <p>Enter Address</p>
                            <input type="email" placeholder="">
                        </div>
                        <div class="dropdown mt-15">
                            <button class="btn btn-color border dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                Division
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item pt-10" type="button">Barishal</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Chittagong</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Dhaka</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Khulna</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Mymensingh</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Rajshahi</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Rangpur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Sylhet</button></li>
                            </ul>
                        </div>
                        <div class="dropdown mt-15">
                            <button class="btn btn-color border dropdown-toggle" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
                                District
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                <li><button class="dropdown-item pt-10" type="button">Dhaka</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Gazipur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Kishoreganj</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Manikganj</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Munshiganj</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Narayanganj</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Narsingdi</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Tangail</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Faridpur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Gopalganj</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Madaripur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Rajbari</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Shariatpur</button></li>
                            </ul>
                        </div>
                        <div class="dropdown mt-15">
                            <button class="btn btn-color border dropdown-toggle" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
                                Zone
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item pt-10" type="button">Azimpur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Banasree</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Cantonment</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Demra</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Dhanmondi</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Gabtoli</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Gulshan</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Jatrabari</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Khilgaon</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Mirpur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Mohakhali</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Mohammadpur</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Motijheel</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Mugda</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Puran Dhaka</button></li>
                                <li><button class="dropdown-item pt-10" type="button">Uttara</button></li>
                            </ul>
                        </div>

                        <div class="single_form">
                            <input type="checkbox" name="checkbox" id="checkbox2">
                            <label for="checkbox2"></label>
                            <span>I agree to all Terms of Use & Posting Rules</span>
                        </div>
                        <div class="single_form post_ad_btn_wrapper">
                            <a href="{{route('frontend.checkout')}}">
                                <button type="button" class="main-btn">Post Ad</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
