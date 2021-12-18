<section class="sign_in_area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                <div class="sign_in_form">
                    <div class="sign_title">
                        <h5 class="title">Sign Up Now</h5>
                    </div>
                    <form action="#">
                        <div class="sign_form_wrapper">
                            <div class="single_form">
                                <input type="text" placeholder="Username">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="single_form">
                                <input type="email" placeholder="Email">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="single_form">
                                <input type="Text" placeholder="Flat No. Road No.">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="dropdown mt-15">
                                <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-angle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp; Division
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
                                <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-angle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp; District
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
                                <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fal fa-angle-down"></i>&nbsp;&nbsp;&nbsp;&nbsp;  Zone
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
                            <div class="single_form signup-image-upload">
                                <input type="file">
                                <i class="fal fa-portrait"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Password">
                                <i class="fal fa-key"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Confirm Password">
                                <i class="fal fa-key"></i>
                            </div>
                            <div class="single_form">
                                <div class="sign_checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox"></label>
                                    <span>By registering, you accept our Terms & Conditions</span>
                                </div>
                                <div class="sign_new">
                                    <a href="{{route('frontend.signin')}}">Already Signed Up?</a>
                                </div>
                            </div>
                            <a href="{{route('frontend.dashboard')}}" class="mt-20 log-in">
                                <button  class="main-btn" type="button">
                                    Sign Up
                                </button>
                            </a>
                            <div class="modal-break-sign mt-20 mb-20">
                                <div class="row" >
                                    <div class="col-5"><hr></div>
                                    <div class="col-2"><p>Or</p></div>
                                    <div class="col-5" ><hr></div>
                                </div>
                            </div>
                            <div class="social-media-sign" >
                                <div class="row" >
                                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3"></div>
                                    <div class="col-xl-0 col-lg-0 col-md-1 col-sm-1"></div>
                                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-5"><a href="https://www.facebook.com"><img src="{{asset('assets/frontend/images/social_media_icon/facebook.png')}}" alt="social_media"></a>
                                        <a href="https://www.twitter.com"><img src="{{asset('assets/frontend/images/social_media_icon/twiter.png')}}" alt="social_media"></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-3 col-md-3 col-sm-3"></div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
