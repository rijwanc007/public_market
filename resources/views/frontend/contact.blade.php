@extends('frontend.master')
@section('title','Contact | PublicMarket')
@section('content')
<div class="header_content  contact_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Contact Us</h3>
                    <p> We Are Here For You To Provide You With The Best Possible Service. Let Us know All Of Your Complements And Complaints </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact_page pt-120 pb-120" id="contact">
    <div class="container">
        <div class="contact_map">
            <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d58438.99370019598!2d90.37660034520664!3d23.73178733112072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755b9aaa7fb50d1%3A0x7a3104cb73a7058c!2ssetcolbd!3m2!1d23.7317127!2d90.4116198!5e0!3m2!1sen!2sbd!4v1609999884448!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact_form mt-30">
                    <div class="contact_title">
                        <h5 class="title">Send Us Your Thoughts </h5>
                    </div>
                    <form id="contact-form" action="https://demo.graygrids.com/themes/classified/assets/contact.php" method="post">
                        <div class="contact_form_wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="name" placeholder="Name">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" name="email" placeholder="Email">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <i class="far fa-i-cursor"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <i class="fal fa-edit"></i>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">Sand Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="contact_title mt-30">
                        <h5 class="title">Get In Touch</h5>
                    </div>
                    <p> Contact Us For Your Any Need.</p>
                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <div class="info_content media-body">
                            <p> Level 1, example plaza, Dhaka </p>
                        </div>
                    </div>
                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>: +88-01234567890</p>
                            <p>: +88-01234567891</p>
                        </div>
                    </div>
                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="info_content media-body">
                            <p><a> info@publicmarket.com </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br/>
@endsection
