@extends('frontend.master')
@section('title','Product Details | PublicMarket')
@section('content')
@include('frontend.section.product-details')
<br>
@include('frontend.section.related-products')
<br>
<div class="fade modal" id=staticBackdrop2 aria-labelledby=staticBackdropLabel aria-hidden=true data-bs-backdrop=static data-bs-keyboard=false tabindex=-1>
    <div class=modal-dialog>
        <div class=modal-content>
            <div class=modal-header>
                <h5 class=modal-title id=staticBackdropLabel2> Sign In </h5>
                <button class=btn-close type=button data-bs-dismiss=modal aria-label=Close></button>
            </div>
            <div class=modal-body>
                <div class="mb-20 ml-30 mr-30 sign_form_wrapper">
                    <div class=single_form>
                        <input type=email placeholder=Username>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class=single_form>
                        <input type=password placeholder=Password>
                        <i class="fal fa-key"></i>
                    </div>
                    <div class="single_form d-sm-flex justify-content-between">
                        <div class=sign_checkbox>
                            <input type=checkbox id=checkbox>
                            <label for=checkbox></label>
                            <span>Keep me logged in</span>
                        </div>
                        <div class=sign_forgot>
                            <a href=#>Forgot Password?</a>
                        </div>
                    </div>
                    <div class=sign_new>
                        <a href="{{route('frontend.register')}}">New To PublicMarket?</a>
                    </div>
                </div>
                <a href="{{route('frontend.dashboard')}}"class=log-in>
                    <button class=main-btn>
                        Log In
                    </button>
                </a>
                <div class="mt-20 modal-break">
                    <div class=row>
                        <div class=col-5>
                            <hr>
                        </div>
                        <div class=col-2><p>Or</div>
                        <div class=col-5>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class=social-media>
                    <div class=row>
                        <div class=col-4></div>
                        <div class=col-4><a href="{{route('frontend.index')}}"><img alt=social_media src="{{asset('assets/frontend/images/social_media_icon/facebook.png')}}"></a>
                            <a href="{{route('frontend.index')}}"><img alt=social_media src="{{asset('assets/frontend/images/social_media_icon/twiter.png')}}"></a>
                        </div>
                        <div class=col-4></div>
                    </div>
                </div>
            </div>
            <div class=modal-footer>
                <button class="btn btn-secondary"type=button data-bs-dismiss=modal>Later</button>
            </div>
        </div>
    </div>
</div>
@endsection
