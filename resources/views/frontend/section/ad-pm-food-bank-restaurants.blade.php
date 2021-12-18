<section class="post_ads_page pt-70 pb-120" id="pmfoodbank">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="post_form mt-50">
                    <div class="post_title">
                        <h5 class="title">Ad Detail</h5>
                    </div>
                    <form action="#">
                        <div class="form-row">
                            <div class="single_form col-lg-4">
                                <label>Ad title  </label>
                                <input id="title" type="text" placeholder="Keep It Short And Informative">
                            </div>
                            <div class="single_form col-lg-4">
                                <label>Product Name</label>
                                <input type="text" placeholder="Enter Product Name">
                            </div>
                            <div class="single_form col-lg-4">
                                <label>Brand</label>
                                <input type="text" placeholder="Enter Brand ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="single_form col-lg-4">
                                <label>Others</label>
                                <input type="text" placeholder="Add other feature">
                            </div>
                            <div class="single_form col-lg-4">
                                <label>Price</label>
                                <input type="text" placeholder="Enter price ">
                            </div>
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
                            <label for="upload" class="uploadareasize">

                                <span class="mb-4">Add upto 5 photos(optional)</span>
                                <ul class="imageunorderlist">
                                    <li class="imagelist">
                                        <span><img class="uploadimages" src="{{asset('assets/frontend/images/upload.jpg')}}"></span>
                                        <input type="file" id="upload" >
                                        <p class="imgtext">Add a photo</p>
                                    </li>
                                    <li class="imagelist">
                                        <span><img class="uploadimages" src="{{asset('assets/frontend/images/upload.jpg')}}"></span>
                                        <input type="file" id="upload" >
                                        <p class="imgtext">Add a photo</p>
                                    </li>
                                    <li class="imagelist">
                                        <span><img class="uploadimages" src="{{asset('assets/frontend/images/upload.jpg')}}"></span>
                                        <input type="file" id="upload" >
                                        <p class="imgtext">Add a photo</p>
                                    </li>
                                    <li class="imagelist">
                                        <span><img class="uploadimages" src="{{asset('assets/frontend/images/upload.jpg')}}"></span>
                                        <input type="file" id="upload" >
                                        <p class="imgtext">Add a photo</p>
                                    </li>
                                    <li class="imagelist">
                                        <span><img class="uploadimages" src="{{asset('assets/frontend/images/upload.jpg')}}"></span>
                                        <input type="file" id="upload" >
                                        <p class="imgtext">Add a photo</p>
                                    </li>
                                </ul>
                                <span class="uploadfilefootertext">Maximum upload file size: 500 KB</span>
                            </label>
                        </div>
                        <div class="row justify-content-center">
                            <div class="postads">
                                <ul>
                                    <li><a href="#">Post Ads</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

