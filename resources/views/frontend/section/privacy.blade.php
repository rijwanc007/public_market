<section class="privacy_setting_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            @include('frontend.include.sidebar',['dashboard'=>'','settings'=>'','professional'=>'','payment'=>'','favourite'=>'','privacy'=>'active','message'=>'','member'=>'','ads'=>''])
            <div class="col-lg-8">
                <div class="privacy_setting_content mt-50">
                    <div class="post_title">
                        <h5 class="title">Privacy Setting</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="privacy_list mt-30">
                                <div class="privacy_title">
                                    <h5 class="title">Configure Privacy</h5>
                                </div>
                                <div class="privacy_list_wrapper">
                                    <ul>
                                        <li>
                                            <div class="single_privacy_list">
                                                <div class="list_checkbox">
                                                    <input type="checkbox" checked="" name="radio" id="checkbox1">
                                                    <label for="checkbox1"></label>
                                                </div>
                                                <div class="list_content">
                                                    <p>Make my profile photo public</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_privacy_list">
                                                <div class="list_checkbox">
                                                    <input type="checkbox" checked="" name="radio" id="checkbox2">
                                                    <label for="checkbox2"></label>
                                                </div>
                                                <div class="list_content">
                                                    <p>I want to receive monthly newsletter</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_privacy_list">
                                                <div class="list_checkbox">
                                                    <input type="checkbox" checked=""  name="radio" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                </div>
                                                <div class="list_content">
                                                    <p>I want to receive e-mail notifications of offers/messages</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_privacy_list">
                                                <div class="list_checkbox">
                                                    <input type="checkbox" checked="" name="radio" id="checkbox4">
                                                    <label for="checkbox4"></label>
                                                </div>
                                                <div class="list_content">
                                                    <p>I want to receive e-mail alerts about new listings</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_privacy_list">
                                                <div class="list_checkbox">
                                                    <input type="checkbox" checked="" name="radio" id="checkbox5">
                                                    <label for="checkbox5"></label>
                                                </div>
                                                <div class="list_content">
                                                    <p>Enable offers/messages option in all my ads Post</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="main-btn">Update</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="privacy_account_delete mt-30">
                                <div class="privacy_title">
                                    <h5 class="title">Delete Account</h5>
                                </div>
                                <div class="account_delete">
                                    <form action="#">
                                        <div class="mt-20">
                                            <label>Why Leave?</label>
                                            <div class="dropdown">
                                                <button class="btn btn-color sign-drop-border text-left" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Issue
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item pt-10" type="button">Harassment</button></li>
                                                    <li><button class="dropdown-item pt-10" type="button">Privacy Reasons</button></li>
                                                    <li><button class="dropdown-item pt-10" type="button">Fraudulent Encounter</button></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single_form">
                                            <label>Describe The Issue :</label>
                                            <textarea placeholder="Description"></textarea>
                                        </div>
                                        <div class="single_form">
                                            <button class="main-btn">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
