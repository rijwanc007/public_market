<section class="dashboard_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'active','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','member'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Profile Settings</h5>
                    </div>
                    <div class="pro-image pt-20">
                        <img src="{{asset('assets/frontend/images/user-1.jpg')}}" />
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_form">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <label>Email</label>
                                    <input type="email" placeholder="E-mail Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <label>Local Address</label>
                                    <input type="text" placeholder="Flat No. Road No.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-20">
                                    <label>Division Name</label>
                                    <div class="dropdown">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-20">
                                    <label>District Name</label>
                                    <div class="dropdown">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu4" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-20">
                                    <label>District Name</label>
                                    <div class="dropdown">
                                        <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu3" data-bs-toggle="dropdown" aria-expanded="false">
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
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form pro-setting-image">
                                    <label>Profile Image</label>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox"></label>
                                    <span>Subscribe me to Newsletter</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <button class="main-btn">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Update Password</h5>
                    </div>
                    <form action="#">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="single_form">
                                    <label>Old Password</label>
                                    <input type="password" placeholder="Old Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <label>New Password</label>
                                    <input type="password" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <label>Confirm New Password</label>
                                    <input type="password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <button class="main-btn">Update Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
