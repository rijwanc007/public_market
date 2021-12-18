@extends("frontend.master")
@section('title','Membership | PublicMarket')
@section('content')

    <section class="dashboard_page pt-70 pb-120">
        <div class="container">
            <div class="row">
                @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','member'=>'active','ads'=>''])
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="dashboard_content mt-50">
                                <div class="post_title">
                                    <h5 class="title">Membership</h5>
                                </div>
                                <div class="row justify-content-center mt-60 mb-20">
                                    <div class="col-sm-10">
                                        <h4 class="text-center pt-10 pb-10">Sorry! You're Not A Member</h4>
                                        <p class="text-center pt-20 pb-20">Become a member today and get the amazing perks and unbelievable deals and take your business to the next level.</p>
                                        <div class="dash-member-div">
                                            <a href="{{route('frontend.member.about')}}">
                                                <button class="btn professional-btn text-center mt-20">
                                                    Know More About Membership
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 row justify-content-center"><div class="col-2"> <button class="main-btn">Logout</button> </div>  </div>
                </div>

            </div>
        </div>
        </div>
    </section>

@endsection
