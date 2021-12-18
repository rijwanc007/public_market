<section class="dashboard_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'active','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Create Professional Profile</h5>
                    </div>
                    <div class="pro-image pt-20">
                        <img src="{{asset('assets/frontend/images/user-1.jpg')}}" />
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6 mt-20">
                            <div class="post_title">
                                <h5 class="title">Profile</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <label>Professional Title</label>
                                    <input type="text" placeholder="Professional Title : Doctor, Lawyer, Engineer">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <label>Featured Degrees</label>
                                    <input type="text" placeholder="Professional Degrees : BBA, BCom">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form pro-setting-image">
                                    <label>Professional Image</label>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 college-border mt-20">
                            <div class="post_title">
                                <h5 class="title">Details</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Small Description About Yourself</label>
                                            <textarea type="text" rows="2"  placeholder="Enter A Small Description About Yourself" style="resize: none;" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Languages</label>
                                            <input class="form-control me-2 product-top-search pro-language-search" type="search" placeholder="Add A Language" aria-label="Search" data-bs-toggle="collapse" data-bs-target="#languageList" aria-expanded="false" aria-controls="collapseExample">
                                            <div class="card pro-language-card collapse" id="languageList">
                                                <div class="card-body">
                                                    <ul class="pro-language-list">
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> Bengali </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> English </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> French </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> Hindi </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> Mandarin </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="btn collapse-btn-vacancy">
                                                                <div class="row justify-content-around">
                                                                    <div class="col-6 text-left"><span><i class="fas fa-language"></i></span> Spanish </div>
                                                                    <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                </div>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Skills</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-20">
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <form action="#">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="single_form">
                                                        <label>Skills</label>
                                                        <input class="form-control me-2 product-top-search pro-language-search" type="search" placeholder="Add A Skill" aria-label="Search" data-bs-toggle="collapse" data-bs-target="#skillList" aria-expanded="false" aria-controls="collapseExample">
                                                        <div class="card pro-language-card collapse" id="skillList">
                                                            <div class="card-body">
                                                                <ul class="pro-language-list">
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 1 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 2 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 3 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 4 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 5 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn collapse-btn-vacancy">
                                                                            <div class="row justify-content-around">
                                                                                <div class="col-6 text-left"> Skill 6 </div>
                                                                                <div class="col-6 text-right"><span class="pro-language-add"><i class="lni lni-circle-plus"></i></span></div>
                                                                            </div>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-10">
                                                        <button class="main-btn"> Add Skill</button>
                                                    </div>
                                                    <div class="mt-20">
                                                        <div class="post_title">
                                                            <h5 class="title">Added Skills</h5>
                                                        </div>
                                                        <div class="mt-10 pro-skill-preview">
                                                            <span> Skill 1 </span> <span> Skill 2 </span> <span> Skill 3 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Experience</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-20">
                            <div class="post_title">
                                <h5 class="title">Workplace</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Workplace</label>
                                            <input type="text" placeholder="Enter Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Position</label>
                                            <input type="text" placeholder="Enter Position Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Short Description Of Your Role</label>
                                            <textarea type="text" rows="2" placeholder="Describe Your Role In Short" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date Of Joining</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date Of Leaving</label>
                                            <input type="date">
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input pay-check" type="checkbox" value="" id="paymentMethod1" >
                                            <label class="form-check-label pt-1" for="paymentMethod1">
                                                Currently Working
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 college-border mt-20">
                            <div class="post_title">
                                <h5 class="title">Add Another Workplace</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <div class="col-4 exp-pro-add">
                                                <button type="button" class="btn"><i class="lni lni-circle-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Education</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-20">
                            <div class="post_title">
                                <h5 class="title">School</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of School</label>
                                            <input type="text" placeholder="Enter School Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Certificate</label>
                                            <input type="text" placeholder="Enter Certificate Name : PSC/JSC/SSC">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Branch Name</label>
                                            <input type="text" placeholder="Enter Branch Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date OF Graduation</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>GPA</label>
                                            <input type="number" placeholder="Enter GPA">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 college-border mt-20">
                            <div class="post_title">
                                <h5 class="title">College</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of College</label>
                                            <input type="text" placeholder="Enter College Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Certificate</label>
                                            <input type="text" placeholder="Enter Certificate Name : Higher Secondary Certificate">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Branch Name</label>
                                            <input type="text" placeholder="Enter Branch Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date OF Graduation</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>GPA</label>
                                            <input type="number" placeholder="Enter GPA">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 mt-20">
                            <div class="post_title">
                                <h5 class="title">Graduation</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of University</label>
                                            <input type="text" placeholder="Enter University Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Certificate</label>
                                            <input type="text" placeholder="Enter Certificate Name : Bachelor Of Science">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Branch Name</label>
                                            <input type="text" placeholder="Enter Branch Name : Civil Engineering">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date Of Graduation</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>CGPA</label>
                                            <input type="number" placeholder="Enter GPA">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 college-border mt-20">
                            <div class="post_title">
                                <h5 class="title">Add Another Education</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <div class="col-4 education-pro-add">
                                                <button type="button" class="btn"><i class="lni lni-circle-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Certification</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-20">
                            <div class="post_title">
                                <h5 class="title">Certification</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Organization</label>
                                            <input type="text" placeholder="Enter Organization Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Name Of Certificate</label>
                                            <input type="text" placeholder="Enter Name Of Certificate">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Field Name</label>
                                            <input type="text" placeholder="Enter Name Of Field">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <label>Date Of Certification</label>
                                            <input type="date">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 college-border mt-20">
                            <div class="post_title">
                                <h5 class="title">Add Another Certification</h5>
                            </div>
                            <form action="#">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <div class="col-4 certification-pro-add">
                                                <button type="button" class="btn"><i class="lni lni-circle-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-10">
                    <div class="col-md-4">
                        <div class="single_form">
                            <a href="professional.html">
                                <button class="main-btn btn-block">Create</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
