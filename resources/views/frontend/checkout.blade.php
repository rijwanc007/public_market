@extends('frontend.master')
@section('title','Checkout | PublicMarket')
@section('content')
@include('frontend.section.ad-checkout')
<br />

<!-- Modal -->
<div class="modal fade" id="bumpModal" tabindex="-1" aria-labelledby="bumpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bump-modal-title" id="bumpModalLabel"><i class="far fa-level-up-alt"></i>&nbsp;&nbsp;Bump Your Ad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="discount_content">
                    <p class="pb-1 filter-heading">Choose Your Package :</p>
                    <ul class="discount_radio package-list">
                        <li>
                            <input type="radio" checked="" name="radio" id="radio4">
                            <label for="radio4"></label> <span>3 Days</span>
                            <p class="package-price1">৳399</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio5">
                            <label for="radio5"></label> <span>7 Days</span>
                            <p class="package-price2">৳499</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio6">
                            <label for="radio6"></label> <span>15 Days</span>
                            <p class="package-price3">৳599</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="topModal" tabindex="-1" aria-labelledby="topModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bump-modal-title" id="topModalLabel"><i class="far fa-medal"></i>&nbsp;&nbsp;Top Ad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="discount_content">
                    <p class="pb-1 filter-heading">Choose Your Package :</p>
                    <ul class="discount_radio package-list">
                        <li>
                            <input type="radio" checked="" name="radio" id="radio4">
                            <label for="radio4"></label> <span>3 Days</span>
                            <p class="package-price1">৳199</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio5">
                            <label for="radio5"></label> <span>7 Days</span>
                            <p class="package-price2">৳299</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio6">
                            <label for="radio6"></label> <span>15 Days</span>
                            <p class="package-price3">৳399</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="urgentModal" tabindex="-1" aria-labelledby="urgentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bump-modal-title" id="urgentModalLabel"><span class="btn-inverse-danger">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="discount_content">
                    <p class="pb-1 filter-heading">Choose Your Package :</p>
                    <ul class="discount_radio package-list">
                        <li>
                            <input type="radio" checked="" name="radio" id="radio4">
                            <label for="radio4"></label> <span>3 Days</span>
                            <p class="package-price1">৳49</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio5">
                            <label for="radio5"></label> <span>7 Days</span>
                            <p class="package-price2">৳149</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio6">
                            <label for="radio6"></label> <span>15 Days</span>
                            <p class="package-price3">৳249</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="spotModal" tabindex="-1" aria-labelledby="spotModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bump-modal-title" id="spotModalLabel"><i class="far fa-lightbulb-on"></i>&nbsp; Spotlight</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="discount_content">
                    <p class="pb-1 filter-heading">Choose Your Package :</p>
                    <ul class="discount_radio package-list">
                        <li>
                            <input type="radio" checked="" name="radio" id="radio4">
                            <label for="radio4"></label> <span>3 Days</span>
                            <p class="package-price1">৳499</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio5">
                            <label for="radio5"></label> <span>7 Days</span>
                            <p class="package-price2">৳599</p>
                        </li>
                        <li>
                            <input type="radio" name="radio" id="radio6">
                            <label for="radio6"></label> <span>15 Days</span>
                            <p class="package-price3">৳699</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
