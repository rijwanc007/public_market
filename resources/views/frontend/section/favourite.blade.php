<section class="payments_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'','favourite'=>'active','privacy'=>'','message'=>'','member'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="my_ads message-content mt-50">
                    <div class="post_title">
                        <h5 class="title">My Favourite</h5>
                    </div>
                    <div class="my_ads_menu">
                        <p class="favourite-top-counter">Favourite Ads <i class="fal fa-heart"></i> <span class="text-center">3</span></p>
                    </div>
                    <div class="ads_table table-responsive mt-30 pl-1 pr-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="photo">Photo</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Ad Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="table_photo">
                                        <img src="{{asset('assets/frontend/images/bike.png')}}" alt="ads">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6>KTM 800cc Bike</h6>
                                        <p>Ad ID: ng3D5hAMHPajQrM</p>
                                        <p>Category: Transportation</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span>৳ 345,000.00</span>
                                    </div>
                                </td>
                                <td>
                                    <p class="ad-active-label text-center">Active</p>
                                </td>
                                <td>
                                    <div class="table_action">
                                        <ul>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#removeFavourite"><i class="fas fa-heart-broken"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="photo">
                                    <div class="table_photo">
                                        <img src="{{asset('assets/frontend/images/camera.png')}}" alt="ads">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="titles">Nikon Camera</h6>
                                        <p>Ad ID: ng3D5hAMHPajQrM</p>
                                        <p>Category: Electronics</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span>৳ 55,000.00</span>
                                    </div>
                                </td>
                                <td>
                                    <p class="ad-active-label text-center">Active</p>
                                </td>

                                <td class="action">
                                    <div class="table_action">
                                        <ul>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#removeFavourite"><i class="fas fa-heart-broken"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table_photo">
                                        <img src="{{asset('assets/frontend/images/cycle.png')}}" alt="ads">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h6 class="titles">High Performance Bi-Cycle</h6>
                                        <p>Ad ID: ng3D5hAMHPajQrM</p>
                                        <p>Category: Transportation</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span>৳ 27,000.00</span>
                                    </div>
                                </td>
                                <td>
                                    <p class="ad-pending-label text-center">Pending</p>
                                </td>
                                <td class="action">
                                    <div class="table_action">
                                        <ul>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#removeFavourite"><i class="fas fa-heart-broken"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="pagination_wrapper mt-50">
                            <ul class="pagination justify-content-center">
                                <li><a class="Previous" href="#"><i class="fal fa-angle-left"></i></a></li>
                                <li><a class="number active" href="#">1</a></li>
                                <li><a class="number" href="#">2</a></li>
                                <li><a class="number" href="#">3</a></li>
                                <li><a class="next" href="#"><i class="fal fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
