<section class="pb-120 product_details_page pt-30">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="mt-50 product_details">
                    <div class=row>
                        <div class="title_container mb-2">
                            <div>
                                <h3 class="title_container" style="color: #0073BD;">We're Always There For You</h3>
                                <span class="sub_title">Posted on 01 Aug 10:28 am</span>
                            </div>
                        </div>
                        <div class=col-lg-10>
                            <div class=product_image>
                                <div class="blog_image">
                                    <video controls title="Our video player">
                                        <source src="{{asset('assets/frontend/video/The Breathtaking Beauty of Nature.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="blog_content pt-2">
                                <p class="tvcCompany">Skies Engineering & Technology</p>
                                <p class="tvcDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged .</p>
                                <ul class="meta-description mt-2">
                                    <li><i class="fal fa-clock"></i><a href="#">23 March, 2021</a></li>
                                    <li><a href="#"><span class="line"></span> <i class="fas fa-eye show"></i> 20M</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 mt-30 pt-3">
                            <div class="sidebar-ad">
                                <div class="small-ad"><img src="{{asset('assets/frontend/images/banner-ad-small.jpg')}}" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr">
                    <div class="button_promotion">
                        <button type="button" class="btn btn-warning"><i class="fa fa-arrow-up mr-2"></i><a
                                href="{{route('promote.index')}}"><span style="color: white;">Promote this Tvc</span></a></button>
                        <button type="button" class="btn btn-light"><i class="fa fa-ban mr-2" aria-hidden="true" ></i><a
                                href="{{route('report.index')}}">Report this Tvc</a></button>

                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tvctermConditionModal"><i class="fa fa-gavel mr-2" style="color: #FF4367" aria-hidden="true" ></i><a
                                href="#">Terms apply</a></button>
                        <!-- Modal -->
                        <div class="modal fade" id="tvctermConditionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{asset('assets/frontend/images/Letterhead.png')}}" alt="term-condition">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal -->
                        <button type="button" class="btn btn-light"><i class="fas fa-save mr-2" style="color: #FF4367" aria-hidden="true" ></i><a
                                href="#">Save this</a></button>
                        <button type="button" class="btn btn-light"><i class="fas fa-share-square" style="color: #FF4367"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


