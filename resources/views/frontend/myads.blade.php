@extends('frontend.master')
@section('title','My Ads | PublicMarket')
@section('content')
@include('frontend.section.myads')
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

    <!--Delete Modal-->
    <div class="modal fade" id="deleteAd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content view-modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAdLabel">Ad Details</h5>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-10 card text-center">
                            <h3 class="pt-20 pb-20">Delete Ad</h3>
                            <p class="pt-10 pb-10 text-center"> Are You Sure, You Want To Delete This Ad? </p>
                            <p class="pt-10 pb-10 text-center"> The Ad And All Related Information Will Be Deleted Permanently</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-inverse-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-inverse-danger" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
