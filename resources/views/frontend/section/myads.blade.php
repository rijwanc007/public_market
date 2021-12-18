<section class="dashboard_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'','message'=>'','member'=>'','ads'=>'active'])
            <div class="col-lg-8">
                <div class="row">
                    <div class="dashboard_content mt-50" id="myads">
                        <div class="post_title">
                            <h5 class="title">My Ads</h5>
                        </div>
                        <div class="warpper pt-20">
                            <input class="radio" id="one" name="group" type="radio" checked>
                            <input class="radio" id="two" name="group" type="radio">
                            <input class="radio" id="three" name="group" type="radio">
                            <div class="tabs border-head">
                                <label class="tab border-child" id="one-tab" for="one">All Ads <i class="fal fa-boxes"></i> <span class="text-center">3</span></label>
                                <label class="tab" id="two-tab" for="two">Boosted Ads <i class="fal fa-rocket"></i> <span class="text-center">2</span></label>
                                <label class="tab" id="three-tab" for="three">Sold Ads <i class="fal fa-coins"></i> <span class="text-center">2</span></label>
                            </div>
                            <div class="panels">
                                <div class="row justify-content-around dash-card mt-10">
                                    <div class="panel" id="one-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20">
                                            <div class="item table-responsive">
                                                <table class="table">
                                                    <thead class="myad-thead">
                                                    <th class="text-center">Ad Title</th>
                                                    <th class="text-center">Ad Details</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Actions</th>
                                                    </thead>
                                                    <tbody class="myad-tbody">
                                                    <tr>
                                                        <td class="table-text">High Performanc...</td>
                                                        <td class="table-text">Very High Perfo...</td>
                                                        <td class="table-text">৳27,000</td>
                                                        <td>
                                                            <p class="ad-active-label text-center">Active</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <a href="editAd.html"><button type="button" class="btn btn-sm btn-inverse-info btn-icon"><i class="mdi mdi-pencil"></i></button></a>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-text">Canon Camera</td>
                                                        <td class="table-text">Very Good Colo...</td>
                                                        <td class="table-text">৳55,000</td>
                                                        <td>
                                                            <p class="ad-pending-label text-center">Pending</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <a href="editAd.html"><button type="button" class="btn btn-sm btn-inverse-info btn-icon"><i class="mdi mdi-pencil"></i></button></a>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-text">KTM 800cc Bike</td>
                                                        <td class="table-text">Awesome Bik...</td>
                                                        <td class="table-text">৳345,000</td>
                                                        <td>
                                                            <p class="ad-sold-label text-center">Sold</p>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <a href="editAd.html"><button type="button" class="btn btn-sm btn-inverse-info btn-icon"><i class="mdi mdi-pencil"></i></button></a>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
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
                                    <div class="panel" id="two-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20 limit-padding">
                                            <div class="item table-responsive">
                                                <table class="table">
                                                    <thead class="myad-thead">
                                                    <th class="text-center">Ad Title</th>
                                                    <th class="text-center">Ad Details</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Actions</th>
                                                    </thead>
                                                    <tbody class="myad-tbody">
                                                    <tr>
                                                        <td class="table-text">High Performance Bi-Cycle</td>
                                                        <td class="table-text">Very High Performance...</td>
                                                        <td class="table-text">৳27,000</td>
                                                        <td class="">
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <a href="editAd.html"><button type="button" class="btn btn-sm btn-inverse-info btn-icon"><i class="mdi mdi-pencil"></i></button></a>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-text">Canon Camera</td>
                                                        <td class="table-text">Very Good Color Picker...</td>
                                                        <td class="table-text">৳55,000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <a href="editAd.html"><button type="button" class="btn btn-sm btn-inverse-info btn-icon"><i class="mdi mdi-pencil"></i></button></a>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
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
                                    <div class="panel" id="three-panel">
                                        <div class="col-md-12 col-sm-12 equal-height mb-20 limit-padding">
                                            <div class="item table-responsive">
                                                <table class="table">
                                                    <thead class="myad-thead">
                                                    <th class="text-center">Ad Title</th>
                                                    <th class="text-center">Ad Details</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Options</th>
                                                    </thead>
                                                    <tbody class="myad-tbody">
                                                    <tr>
                                                        <td class="table-text">High Performance Bi-Cycle</td>
                                                        <td class="table-text">Very High Performance...</td>
                                                        <td class="table-text">৳27,000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-text">Canon Camera</td>
                                                        <td class="table-text">Very Good Color Picker...</td>
                                                        <td class="table-text">৳55,000</td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-inverse-success btn-icon" data-bs-toggle="modal" data-bs-target="#viewAd"><i class="mdi mdi-eye"></i></button>
                                                            <button type="button" class="btn btn-sm btn-inverse-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteAd"><i class="mdi mdi-delete-forever"></i></button>
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
                        </div>
                    </div>
                    <div class="pt-10 row justify-content-center"><div class="col-2"> <button class="main-btn">Logout</button> </div>  </div>
                </div>
            </div>
        </div>
    </div>
</section>
