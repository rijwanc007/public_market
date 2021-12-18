<section class="pb-120 pt-70 privacy_setting_page">
    <div class=container>
        <div class="row justify-content-center">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'active','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','member'=>'','ads'=>''])
            <div class=col-lg-8>
                <div class=row>
                    <div class=col-md-6>
                        <div class="mt-50 dashboard_content">
                            <div class=post_title>
                                <h5 class=title>Professional Profile</h5>
                            </div>
                            <div class="row justify-content-center mb-20 mt-60">
                                <div class=col-sm-12>
                                    <div class=card>
                                        <div class="card-body user-card">
                                            <div class=pro-user-image-thumb>
                                                <img src={{asset('assets/frontend/images/user-1.jpg')}}>
                                            </div>
                                            <div class="pt-100 user-content">
                                                <h5 class="text-center pl-3">Dummy Name</h5>
                                                <p class="text-center pl-3 pt-1"><i class="fal fa-briefcase"></i> Dummy Profession</p>
                                                <p class="text-center pl-3 pt-1"><i class="fal fa-graduation-cap"></i>Some Dummy Degree</p>
                                                <div class="row pl-2 pr-2 pt-30 pro-user-content">
                                                    <div class="col-4"><p class="text-left"><i class="far fa-map-marker-alt"></i> From :</p></div>
                                                    <div class="col-8"><p class="text-right">Chittagong, Bangladesh</p></div>
                                                </div>
                                                <div class="row pl-2 pr-2 pt-10 pro-user-content">
                                                    <div class="col-6"><p class="text-left"><i class="far fa-calendar-alt"></i> Member Since:</p></div>
                                                    <div class="col-6"><p class="text-right">June 2021</p></div>
                                                </div>
                                                <div class="row pl-2 pr-2 pt-10 pro-user-content">
                                                    <div class="col-6"><p class="text-left"><i class="far fa-calendar-check"></i> Availability:</p></div>
                                                    <div class="col-6"><p class="text-right">9:00Am - 6:00Pm</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn professional-btn text-center mt-20" type=button data-bs-target=#availabilityModal data-bs-toggle=modal>
                                            Set Availability
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-30 dashboard_content">
                            <div class=post_title>
                                <h5 class=title>Details</h5>
                            </div>
                            <div class="row justify-content-center mb-20 mt-15">
                                <div class="pro-desc-title pb-2">
                                    <h5 class="title pb-2">Description</h5>
                                </div>
                                <div class=col-sm-12>
                                    <div class=card>
                                        <div class="card-body user-card">
                                            <div class=" pl-3 text-justify user-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consec adipisicing elit. Animi asperiores at debitis dolor doloremque eos, nam necessitatibus nisi nostrum repellat tempora vel veniam. Delectus iste maiores rerum sequi voluptatibus!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-20 mt-15">
                                <div class="pro-desc-title pb-2">
                                    <h5 class="title pb-2">Languages</h5>
                                </div>
                                <div class=col-sm-12>
                                    <div class=card>
                                        <div class="card-body user-card">
                                            <div class=" pl-3 text-justify user-content pro-language">
                                                <p class="pb-1">
                                                    <i class="fal fa-language"></i> English <span>- fluent</span>
                                                </p>
                                                <p class="pt-1 pb-1">
                                                    <i class="fal fa-language"></i> Bengali <span>- native</span>
                                                </p>
                                                <p class="pt-1 pb-1">
                                                    <i class="fal fa-language"></i> Spanish <span>- conversational</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-30 dashboard_content">
                            <div class=post_title>
                                <h5 class=title>Skills</h5>
                            </div>
                            <div class="row justify-content-center mb-20 mt-15">
                                <div class="pro-desc-title pb-2">
                                    <h5 class="title pb-2">Skills</h5>
                                </div>
                                <div class=col-sm-12>
                                    <div class=card>
                                        <div class="card-body skill-card-body">
                                            <div class=" pl-3 text-justify user-content">
                                                <span class="pro-skill-span">skill 1</span><span class="pro-skill-span">skill 2</span><span class="pro-skill-span">skill 3</span><span class="pro-skill-span">skill 4</span><span class="pro-skill-span">skill 5</span><span class="pro-skill-span">skill 6</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-30 dashboard_content message-content">
                            <div class=post_title>
                                <h5 class=title>Linked Profiles</h5>
                            </div>
                            <div class="ml-10 mr-10 linked-profile mt-10 mb-10">
                                <p class="linked-icon"><i class="lni lni-facebook-original"></i> Facebook</p>
                                <p class="linked-icon"><i class="lni lni-linkedin-original"></i> LinkedIn</p>
                                <p class="linked-icon"><i class="lni lni-google"></i> Google</p>
                                <p class="linked-icon"><i class="lni lni-dribbble"></i> Dribbble</p>
                                <p class="linked-icon"><i class="fas fa-plus-square"></i> GitHub</p>
                                <p class="linked-icon"><i class="fas fa-plus-square"></i> Twitter</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-md-6>
                        <div class="mt-50 dashboard_content message-content">
                            <div class=post_title>
                                <h5 class=title>Experience</h5>
                            </div>
                            <div class="pl-3 education pt-10">
                                <h5 class="education-title mb-3 pb-2">Internship/Attachment</h5>
                                <p class=institute-name><i class="fal fa-building"></i>  Organization Name</p>
                                <p class="degree-name"><i class="fal fa-address-card"></i> Position Name</p>
                                <p class="certi-des pb-3 pt-3">Lorem ipsum dolor sit amet, consectetur adipi elit. Accusamus aspernatur, cumque cupiditate dese enim ex invento</p>
                                <p>
                                <div class="row exp-description justify-content-between">
                                    <div class=col-12>
                                        <p><span><i class="fal fa-calendar-alt"></i> Working Period:</span> April 2017 - December 2017</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <div class="pl-3 education pt-40">
                                <h5 class="education-title mb-3 pb-2">Work Place</h5>
                                <p class=institute-name><i class="fal fa-building"></i>  Dummy Organization Name</p>
                                <p class="degree-name"><i class="fal fa-address-card"></i> Position Name</p>
                                <p class="certi-des pb-3 pt-3">Lorem ipsum dolor sit amet, consectetur adipi elit. Accusamus aspernatur, cumque cupiditate dese enim ex invento</p>
                                <p>
                                <div class="row exp-description justify-content-between">
                                    <div class=col-12>
                                        <p><span><i class="fal fa-calendar-alt"></i> Working Period:</span> January 2018 - </p>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="mt-30 dashboard_content message-content">
                            <div class=post_title>
                                <h5 class=title>Education</h5>
                            </div>
                            <div class="pl-3 education pt-10">
                                <h5 class="education-title mb-3 pb-2">School</h5>
                                <p class=institute-name><i class="fal fa-school"></i>  Dummy School Name</p>
                                <p class="degree-name"><i class="fal fa-diploma"></i> PSC/JSC/SSC</p>
                                <p class="edu-department pb-1 pt-1"><span><i class="fal fa-code-branch"></i>Branch:</span> Science</p>
                                <p>
                                <div class="row edu-description justify-content-between">
                                    <div class=col-7>
                                        <p><span><i class="fal fa-graduation-cap"></i>Graduation:</span> April 2010</p>
                                    </div>
                                    <div class=col-5>
                                        <p class="mr-2 text-right">GPA: 5.00</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <div class="pl-3 education pt-30">
                                <h5 class="education-title mb-3 pb-2">College</h5>
                                <p class=institute-name><i class="fal fa-landmark-alt"></i>  Dummy College Name</p>
                                <p class="degree-name"><i class="fal fa-diploma"></i> Higher Secondary Certificate</p>
                                <p class="edu-department pb-1 pt-1"><span><i class="fal fa-code-branch"></i>Branch:</span> Commerce</p>
                                <p>
                                <div class="row edu-description justify-content-between">
                                    <div class=col-7>
                                        <p><span><i class="fal fa-graduation-cap"></i>Graduation:</span> August 2012</p>
                                    </div>
                                    <div class=col-5>
                                        <p class="mr-2 text-right">GPA: 5.00</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <div class="pl-3 education pt-30">
                                <h5 class="education-title mb-3 pb-2">Graduation</h5>
                                <p class=institute-name><i class="fal fa-university"></i>  Dummy University Name</p>
                                <p class="degree-name"><i class="fal fa-diploma"></i> Bachelor/Diploma Of Something</p>
                                <p class="edu-department pb-1 pt-1">
                                    <span><i class="fal fa-code-branch"></i>Branch:</span> Arts</p>
                                <p>
                                <div class="row edu-description justify-content-between">
                                    <div class=col-7>
                                        <p><span><i class="fal fa-graduation-cap"></i>Graduation:</span> August 2016</p>
                                    </div>
                                    <div class=col-5>
                                        <p class="mr-2 text-right">CGPA: 4.00</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="mt-30 dashboard_content message-content">
                            <div class=post_title>
                                <h5 class=title>Certification</h5>
                            </div>
                            <div class="pl-3 education pt-30">
                                <h5 class="education-title mb-3 pb-2">Dummy Certification Organization</h5>
                                <p class=institute-name><i class="fal fa-file-certificate"></i> &nbsp;&nbsp;Certification Name</p>
                                <p class="certi-des pb-1 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, dolorem ducimus error ex nihil soluta suscipit vol</p>
                                <p class="edu-department pb-1 pt-1"><span><i class="fal fa-code-branch"></i>Field:</span>Certification Field</p>
                                <p>
                                <div class="row edu-description justify-content-between">
                                    <div class=col-7>
                                        <p><span><i class="fal fa-graduation-cap"></i>Date:</span>April 2018</p>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-20">
                <a href="professional-create.html">
                    <button class="main-btn">
                        Edit Professional Profile
                    </button>
                </a>
            </div>
        </div>
    </div>

</section>
