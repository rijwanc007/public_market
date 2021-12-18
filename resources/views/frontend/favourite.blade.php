@extends('frontend.master')
@section('title','Favourite | Publicmarket')
@section('content')
@include('frontend.section.favourite')
<br/>
<!--Edit Modal-->
<div class="modal fade" id="viewAd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content view-modal-body">
            <div class="modal-header">
                <h5 class="modal-title" id="viewAdLabel">Ad Details</h5>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-10 card">
                        <table class="table table-bordered mt-20">
                            <tr>
                                <td colspan="2"><img src="{{asset('assets/frontend/images/cannon.png')}}" class="img-fluid modal-img-center"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Canon Camera</td>
                            </tr>
                            <tr>
                                <td>Details</td>
                                <td>Great Camera. Captures Light Very Nicely And Captures Natural Colors With Amazing Accuracy</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>55,000৳</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>Dhaka,Bangladesh</td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>25 April 2021</td>
                            </tr>
                            <tr>
                                <td>Boost Status</td>
                                <td><p class="ad-pending-label text-center">Pending</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-inverse-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Remove From Favourite Modal-->
<div class="modal fade" id="removeFavourite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content view-modal-body">
            <div class="modal-header">
                <h5 class="modal-title" id="removeFavouriteLabel">Remove This Ad From Favourite</h5>
            </div>
            <div class="modal-body ">
                <div class="row justify-content-center">
                    <div class="col-10 card">
                        <p class="text-center pt-10 pb-10">Are You Sure</p>
                        <p class="text-center pt-10 pb-10">You Want To Remove This From Your Favourites?</p>
                        <p class="text-center pt-10 pb-10">You Won't Be Able To See It Here Anymore.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Remove</button>
            </div>
        </div>
    </div>
</div>
@endsection
