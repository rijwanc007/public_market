<section class="call_to_action_area pt-20 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="call_to_action_content mt-45">
                    <h4 class="title">Subscribe For Update</h4> </div>
            </div>
            <div class="col-lg-7">
                @include('frontend.include.messages')
                <div class="call_to_action_form mt-50">
                    <form action="{{ route('frontend.subscribe.store') }}"> <i class="fal fa-envelope"></i>
                        <input type="text" name="email" placeholder="Enter your mail address . . .">
                        <button class="main-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
