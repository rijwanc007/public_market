<section class="product_page pt-30 pb-120" id="ads">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-content">
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-5 product-search-button pb-3">
                            <div class="dropdown">
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="far fa-map-marker-alt drop-image"></i> &nbsp;<span>Select Location</span>
                                </button>
                                <ul class="dropdown-menu location-sort-ul" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Barishal</a></li>
                                    <li><a class="dropdown-item" href="#">Chittagong</a></li>
                                    <li><a class="dropdown-item" href="#">Dhaka</a></li>
                                    <li><a class="dropdown-item" href="#">Mymensingh</a></li>
                                    <li><a class="dropdown-item" href="#">Khulna</a></li>
                                    <li><a class="dropdown-item" href="#">Rajshahi</a></li>
                                    <li><a class="dropdown-item" href="#">Rangpur</a></li>
                                    <li><a class="dropdown-item" href="#">Sylhet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 product-search-button pb-3">
                            <div class="dropdown">
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="far fa-tags drop-image"></i> &nbsp;<span>Select Category</span>
                                </button>
                                <ul class="dropdown-menu location-sort-ul" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.electronics')}}">Electronics</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.mobile')}}">Mobile</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.home')}}">Home & Living</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.transportation')}}">Transportation</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.pet')}}">Pet & Animals</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.property')}}">Property</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.fashion')}}">Fashion & Beauty</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.hobby')}}">Hobby,Sports & Baby</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.daily')}}">Daily Needs & Grocery</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.factory')}}">Factory & Industry</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.education')}}">Education</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.job')}}">Job</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.service')}}">Services</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.agriculture')}}">Agricultural Products</a></li>
                                    <li><a class="dropdown-item" href="{{route('frontend.ad.foreign')}}">Foreign Jobs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <form class="d-flex">
                                <input class="form-control me-2 product-top-search" type="search" placeholder="What Are You Looking For" aria-label="Search">
                                <button class="btn btn-outline-search" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product_sidebar pt-3">
                    <div class="sidebar_price_range mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Filters</h5>
                        </div>
                        <div class="price_range_content">
                            <div class="dropdown pt-10">
                                <p class="pb-1 filter-heading">Sort By :</p>
                                <button class="btn btn-light product-sort-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Date & Price</span> <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu product-sort-ul" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Date : Newest On Top</a></li>
                                    <li><a class="dropdown-item" href="#">Date : Oldest On Top</a></li>
                                    <li><a class="dropdown-item" href="#">Price : High To Low</a></li>
                                    <li><a class="dropdown-item" href="#">Price : Low To High</a></li>
                                </ul>
                            </div>
                            <div class="check-features pt-20">
                                <p class="pb-1 filter-heading">Filter Ads By :</p>
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Featured
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Verified Seller
                                    </label>
                                </div>
                            </div>
                            <div class="radio-features pt-20">
                                <div class="discount_content">
                                    <p class="pb-1 filter-heading">Some More Filters :</p>
                                    <ul class="discount_radio">
                                        <li>
                                            <input type="radio" checked="" name="radio" id="radio4">
                                            <label for="radio4"></label> <span>Top Sellers</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio5">
                                            <label for="radio5"></label> <span>PublicMarket Members</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio" id="radio6">
                                            <label for="radio6"></label> <span>Banner Advertisements</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="sidebar_categories mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="sidebar_categories_content">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne"><i class="fal fa-mobile-alt catIcon"></i> Mobile</a>
                                    </div>
                                    <div class="collapse" id="collapseOne">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Mobile Phones</a></li>
                                                <li><a href="#">Mobile Phone Accessories</a></li>
                                                <li><a href="#">SIM Cards </a></li>
                                                <li><a href="#">Mobile Phone Services</a></li>
                                                <li><a href="#">Mobile Internet</a></li>
                                                <li><a href="#">Wearable Technology</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo"><i class="fal fa-plug catIcon"></i>Electronics</a>
                                    </div>
                                    <div class="collapse" id="collapseTwo">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Desktop Computers</a></li>
                                                <li><a href="#">Laptops </a></li>
                                                <li><a href="#">Laptop & Computer Accessories </a></li>
                                                <li><a href="#">TVs </a></li>
                                                <li><a href="#">Audio & Sound Systems </a></li>
                                                <li><a href="#">Cameras, Camcorders & Accessories </a></li>
                                                <li><a href="#">TV & Video Accessories </a></li>
                                                <li><a href="#">Tablets & Accessories </a></li>
                                                <li><a href="#">Video Game Consoles & Accessories </a></li>
                                                <li><a href="#">Photocopiers </a></li>
                                                <li><a href="#">Generator</a></li>
                                                <li><a href="#">IPS & Battery</a></li>
                                                <li><a href="#">Lighting</a></li>
                                                <li><a href="#">Security & Access Control</a></li>
                                                <li><a href="#">Printer & Scanner</a></li>
                                                <li><a href="#">Other Electronics </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree"><i class="fal fa-home-lg catIcon"></i>Home & Living</a>
                                    </div>
                                    <div class="collapse" id="collapseThree">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">ACs & Home Electronics </a></li>
                                                <li><a href="#">Home Appliances </a></li>
                                                <li><a href="#">Bedroom Furniture </a></li>
                                                <li><a href="#">Living Room Furniture </a></li>
                                                <li><a href="#">Kitchen & Dining Furniture </a></li>
                                                <li><a href="#">Home Textiles & Decoration </a></li>
                                                <li><a href="#">Office & Shop Furniture </a></li>
                                                <li><a href="#">Household Items </a></li>
                                                <li><a href="#">Children's Furniture </a></li>
                                                <li><a href="#">Freeze</a></li>
                                                <li><a href="#">Fan & Washing Machine</a></li>
                                                <li><a href="#">Crockeries Items</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour"><i class="fal fa-truck-pickup catIcon"></i> Vehicles & Transportation</a>
                                    </div>
                                    <div class="collapse" id="collapseFour">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Cars </a></li>
                                                <li><a href="#">Motorbikes & Scooters</a></li>
                                                <li><a href="#">Bicycles </a></li>
                                                <li><a href="#">Auto Parts & Accessories </a></li>
                                                <li><a href="#">Rentals </a></li>
                                                <li><a href="#">Trucks Three Wheelers </a></li>
                                                <li><a href="#">Tractor & Heavy Duty  </a></li>
                                                <li><a href="#">Boats & Water Transport </a></li>
                                                <li><a href="#">Vans </a></li>
                                                <li><a href="#">Auto Services </a></li>
                                                <li><a href="#">Buses</a></li>
                                                <li><a href="#">Construction Equipments  </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive"><i class="fal fa-cannabis catIcon"></i> Daily Essential Products</a>
                                    </div>
                                    <div class="collapse" id="collapseFive">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Grocery </a></li>
                                                <li><a href="#">Healthcare </a></li>
                                                <li><a href="#">Fruits, Vegetables  & Mushroom</a></li>
                                                <li><a href="#">Household </a></li>
                                                <li><a href="#">Meat & Seafood </a></li>
                                                <li><a href="#">Kits Products </a></li>
                                                <li><a href="#">Bread & Beverage</a></li>
                                                <li><a href="#">Other Essential Commodities.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix"><i class="fal fa-walking catIcon"></i>Health & Beauty</a>
                                    </div>
                                    <div class="collapse" id="collapseSix">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Watches </a></li>
                                                <li><a href="#">Beauty Products </a></li>
                                                <li><a href="#">Jewellery</a></li>
                                                <li><a href="#">Bags </a></li>
                                                <li><a href="#">Optical Items </a></li>
                                                <li><a href="#">Fashion Accessories</a></li>
                                                <li><a href="#">Hospital & Clinic</a></li>
                                                <li><a href="#">Ambulance</a></li>
                                                <li><a href="#">Supplements, Nutrition & Medicine</a></li>
                                                <li><a href="#">Herbal Products</a></li>
                                                <li><a href="#">Fragrances-Ator-Perfumes</a></li>
                                                <li><a href="#">Other Items </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven"><i class="fal fa-tshirt catIcon"></i>Garments & Clothing</a>
                                    </div>
                                    <div class="collapse" id="collapseSeven">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Women's Clothing & Accessories </a></li>
                                                <li><a href="#">Men's Clothing & Accessories </a></li>
                                                <li><a href="#">Children's Clothing & Accessories </a></li>
                                                <li><a href="#">Wholesale - Bulk </a></li>
                                                <li><a href="#">Shoes & Food ware</a></li>
                                                <li><a href="#">Leather Products</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight"><i class="fal fa-golf-ball catIcon"></i>Hobby, Sports & Baby</a>
                                    </div>
                                    <div class="collapse" id="collapseEight">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Musical Instruments </a></li>
                                                <li><a href="#">Children's Items </a></li>
                                                <li><a href="#">Fitness & Gym </a></li>
                                                <li><a href="#">Sports </a></li>
                                                <li><a href="#">Other Hobby, Sport & Kids items </a></li>
                                                <li><a href="#">Music, Books & Movies </a></li>
                                                <li><a href="#">Handicraft & Decoration</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-tractor catIcon"></i>Agriculture & agro Product</a>
                                    </div>
                                    <div class="collapse" id="collapseNine">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Crops, Rice-Potato-Wheat-Corn </a></li>
                                                <li><a href="#">Farming Tools & Machinery </a></li>
                                                <li><a href="#">Poultry & Dairy Farm</a></li>
                                                <li><a href="#">Dal-Onion -Garlic-Ginger-Chili</a></li>
                                                <li><a href="#">Fish-Shrimp</a></li>
                                                <li><a href="#">Feed & Seed</a></li>
                                                <li><a href="#">Cattle</a></li>
                                                <li><a href="#">Other Agriculture Goods</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse10" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-business-time catIcon"></i>Business & Industry</a>
                                    </div>
                                    <div class="collapse" id="collapse10">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Medical Equipment & Supplies </a></li>
                                                <li><a href="#">Industry Machinery & Tools </a></li>
                                                <li><a href="#">Office Supplies & Stationary </a></li>
                                                <li><a href="#">Licenses, Titles & Tenders </a></li>
                                                <li><a href="#">Raw Materials & Industrial Supplies </a></li>
                                                <li><a href="#">Safety & Security </a></li>
                                                <li><a href="#">Jute, Plastic & Rubber Products</a></li>
                                                <li><a href="#">Other Business & Factory Items</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse11" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-user-graduate catIcon"></i>Education</a>
                                    </div>
                                    <div class="collapse" id="collapse11">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Tuition </a></li>
                                                <li><a href="#">Textbooks </a></li>
                                                <li><a href="#">Courses </a></li>
                                                <li><a href="#">Other Education </a></li>
                                                <li><a href="#">Study Abroad</a></li>
                                                <li><a href="#">Language</a></li>
                                                <li><a href="#">IT Training</a></li>
                                                <li><a href="#">School, College & University Admission Advertisement</a></li>
                                                <li><a href="#">Others </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse12" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-gas-pump catIcon"></i>Fuel, Oil & Gas</a>
                                    </div>
                                    <div class="collapse" id="collapse12">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">LP Gas & Cylinder</a></li>
                                                <li><a href="#">Lubricants</a></li>
                                                <li><a href="#">Gas Stove</a></li>
                                                <li><a href="#">LPG Hose Pipe</a></li>
                                                <li><a href="#">LPG Regulator</a></li>
                                                <li><a href="#">Petrol & CNG Pump</a></li>
                                                <li><a href="#">LPG Auto Gas Station</a></li>
                                                <li><a href="#">Oxygen Gas & Cylinder</a></li>
                                                <li><a href="#">Argon Gas & Cylinder</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse13" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-warehouse catIcon"></i>Real State & Property</a>
                                    </div>
                                    <div class="collapse" id="collapse13">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Plot & Land </a></li>
                                                <li><a href="#">Apartments & Flats For Sale </a></li>
                                                <li><a href="#">Houses For Sale </a></li>
                                                <li><a href="#">Commercial Properties For Sale </a></li>
                                                <li><a href="#">Property Tools & Services </a></li>
                                                <li><a href="#">Building & Land Developers.</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse14" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-paw catIcon"></i>Pet & Animals</a>
                                    </div>
                                    <div class="collapse" id="collapse14">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Pets </a></li>
                                                <li><a href="#">Farm Animals </a></li>
                                                <li><a href="#">Pet & Animal Accessories </a></li>
                                                <li><a href="#">Other Pets & Animals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse15" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-utensils-alt catIcon"></i>PM Food Bank & Restaurants</a>
                                    </div>
                                    <div class="collapse" id="collapse15">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">American Food</a></li>
                                                <li><a href="#">Bakery, Sweets & Cake</a></li>
                                                <li><a href="#">Burger</a></li>
                                                <li><a href="#">Chinese Food</a></li>
                                                <li><a href="#">Dessert</a></li>
                                                <li><a href="#">Fast food</a></li>
                                                <li><a href="#">Healthy food</a></li>
                                                <li><a href="#">Indian Food</a></li>
                                                <li><a href="#">Italian Food</a></li>
                                                <li><a href="#">Japanese Food</a></li>
                                                <li><a href="#">Korean Food</a></li>
                                                <li><a href="#">Mexican Food</a></li>
                                                <li><a href="#">Middle Eastern Food</a></li>
                                                <li><a href="#">Pizza</a></li>
                                                <li><a href="#">Seafood</a></li>
                                                <li><a href="#">Thai</a></li>
                                                <li><a href="#">Vegetarian</a></li>
                                                <li><a href="#">Western</a></li>
                                                <li><a href="#">Restaurant & Restora</a></li>
                                                <li><a href="#">Cafe & Tea stall</a></li>
                                                <li><a href="#">Meal Box</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse16" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-person-sign catIcon"></i>Personal Advertisements</a>
                                    </div>
                                    <div class="collapse" id="collapse16">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Doctor & Doctors Chamber</a></li>
                                                <li><a href="#">Advocate & Advocate Chamber</a></li>
                                                <li><a href="#">Honorable Person</a></li>
                                                <li><a href="#">Scholar Person</a></li>
                                                <li><a href="#">Actors, Model & Media Personality</a></li>
                                                <li><a href="#">Singer, Dancer & Musician</a></li>
                                                <li><a href="#">Social Worker</a></li>
                                                <li><a href="#">Architect Designer</a></li>
                                                <li><a href="#">Writer</a></li>
                                                <li><a href="#">Fashion Designer</a></li>
                                                <li><a href="#">Documentary & Video Maker</a></li>
                                                <li><a href="#">Accounts & Auditor </a></li>
                                                <li><a href="#">Economist</a></li>
                                                <li><a href="#">Intellectual</a></li>
                                                <li><a href="#">Engineer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse17" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-compress-arrows-alt catIcon"></i>Companies Product Branding</a>
                                    </div>
                                    <div class="collapse" id="collapse17">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">No subcategories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse18" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-cog catIcon"></i>Service</a>
                                    </div>
                                    <div class="collapse" id="collapse18">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Servicing & Repair </a></li>
                                                <li><a href="#">IT Services</a></li>
                                                <li><a href="#">Media & Event Management Services </a></li>
                                                <li><a href="#">Tours & Travels </a></li>
                                                <li><a href="#">Professional Services </a></li>
                                                <li><a href="#">Fitness & Beauty Services </a></li>
                                                <li><a href="#">Domestic & Daycare Services </a></li>
                                                <li><a href="#">Matrimonial & Wedding Matter</a></li>
                                                <li><a href="#">Electrician</a></li>
                                                <li><a href="#">Hospitality Service</a></li>
                                                <li><a href="#">Others </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse19" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-bus catIcon"></i>Tour & Travels</a>
                                    </div>
                                    <div class="collapse" id="collapse19">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Tickets</a></li>
                                                <li><a href="#">Visa</a></li>
                                                <li><a href="#">Travel Agency</a></li>
                                                <li><a href="#">Tourism</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse20" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-chart-bar catIcon"></i>Local Business Point</a>
                                    </div>
                                    <div class="collapse" id="collapse20">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Dokan</a></li>
                                                <li><a href="#">Enterprise</a></li>
                                                <li><a href="#">Traders</a></li>
                                                <li><a href="#">Store</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse21" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-satellite-dish catIcon"></i>Resort, Hotel & Community Centre</a>
                                    </div>
                                    <div class="collapse" id="collapse21">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Resort </a></li>
                                                <li><a href="#">Hotel</a></li>
                                                <li><a href="#">Community & Party Centre</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse22" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-procedures catIcon"></i>Rent/To-Let</a>
                                    </div>
                                    <div class="collapse" id="collapse22">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">Apartment Rentals</a></li>
                                                <li><a href="#">Commercial Property Rentals </a></li>
                                                <li><a href="#">Shops To-Let</a></li>
                                                <li><a href="#">House To-Let</a></li>
                                                <li><a href="#">Garages To-Let</a></li>
                                                <li><a href="#">Sub-Let</a></li>
                                                <li><a href="#">Mess To-Let</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse23" role="button" aria-expanded="false" aria-controls="collapseNine"><i class="fal fa-project-diagram catIcon"></i>Others</a>
                                    </div>
                                    <div class="collapse" id="collapse23">
                                        <div class="card-body subCat">
                                            <ul class="sidebar_categories_list">
                                                <li><a href="#">No subcategories</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_price_range mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Price Range</h5>
                        </div>
                        <div class="price_range_content">
                            <input type="range" class="form-custom-range">
                            <datalist>
                                <option value="0" label="0"></option>
                                <option value="10"></option>
                                <option value="20"></option>
                                <option value="30"></option>
                                <option value="40"></option>
                                <option value="50" label="50k"></option>
                                <option value="60"></option>
                                <option value="70"></option>
                                <option value="80"></option>
                                <option value="90"></option>
                                <option value="100" label="100k"></option>
                            </datalist>
                        </div>
                    </div>
                    <div class="sidebar_discount mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Top Deals</h5>
                        </div>
                        <div class="discount_content">
                            <ul class="discount_radio">
                                <li>
                                    <input type="radio" checked="" name="radio" id="radio1">
                                    <label for="radio1"></label> <span>Flat 10% Off</span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio2">
                                    <label for="radio2"></label> <span>Flat 20% Off</span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio3">
                                    <label for="radio3"></label> <span>Flat 50% Off</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_profile mt-30">
                        <div class=profile_user>
                            <div class=post_title>
                                <h5 class=title>Featured Ad</h5>
                            </div>
                            <div class=user_list>
                                <div class="professional-side-ad pt-20 ">
                                    <img src="{{asset('assets/frontend/images/pro-sidebar-ad.jpg')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div id="carouselExampleControls" class="carousel slide carousel-fade mt-50 top-ad-carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="{{asset('assets/frontend/images/ads-9.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <p class="store-name">Store Name</p>
                                <h4 class="text-left product-carousel-title">Nomet Cycle</h4>
                                <p class="product-carousel-price">৳29,999.00</p>
                                <p class="text-left auth-dealer-badge"><i class="fas fa-check-circle"></i> Auth Dealer</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="{{asset('assets/frontend/images/ads-10.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <p class="store-name">Store Name</p>
                                <h4 class="text-left product-carousel-title">Samsung Galaxy S8</h4>
                                <p class="product-carousel-price">৳33,000.00</p>
                                <p class="text-left verified-seller-badge"><i class="fas fa-check-circle"></i> Verified Seller</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="{{asset('assets/frontend/images/ads-11.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <p class="store-name">Store Name</p>
                                <h4 class="text-left product-carousel-title">LG V30</h4>
                                <p class="product-carousel-price">৳12,000.00</p>
                                <p class="text-left premium-member-badge"><i class="fas fa-check-circle"></i>Member</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="tab-content pt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="product_list">
                            <div class="single_ads_card ads_list d-sm-flex mt-30 spotlight">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-9.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Transportation</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Nomet Cycle</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Dhaka, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳29,999.00</span>
                                        <span class="date">25 Jan, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30 spotlight">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-10.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <span class="btn-inverse-danger urgent-tag">&nbsp;&nbsp;Urgent&nbsp;&nbsp;</span>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Samsung Galaxy S8</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Chittagong, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳33,000.00</span>
                                        <span class="date">22 May, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-11.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}"> LG V30</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Khulna, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳12,000.00</span>
                                        <span class="date">12 March, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/ads-12.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Mobile</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Samsung Galaxy Note9</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Sylhet, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳35,000.00</span>
                                        <span class="date">28 April, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/bike.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Transportation</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">KTM 800cc Bike</a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Rangpur, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳345,000.00</span>
                                        <span class="date">5 June, 2021</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <img src="{{asset('assets/frontend/images/laptop.png')}}" alt="ads">
                                    <span><img class="public-market-tag img-fluid" src="{{asset('assets/frontend/images/logo.png')}}"/></span>
                                </div>
                                <div class="ads_card_content media-body">
                                    <div class="meta d-flex justify-content-between">
                                        <p>Ram & Laptop</p>
                                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                    <h4 class="title"><a href="{{route('frontend.product.details')}}">Macbook Pro - 8GB / 256GB </a></h4>
                                    <p><i class="far fa-map-marker-alt"></i>Mymensingh, Bangladesh</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                                    <div class="ads_price_date d-flex justify-content-between">
                                        <span class="price">৳60,000.00</span>
                                        <span class="date">2 February, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mt-30 pt-3">
                <div class="sidebar-ad">
                    <div class="small-ad"><img src="{{asset('assets/frontend/images/banner-ad-small.jpg')}}" class="img-fluid"></div>
                </div>
            </div>
            <div class="col-lg-12 pt-10">
                <div class="bottom-ad"><img src="{{asset('assets/frontend/images/bottom-banner.jpg')}}" class="img-fluid"/></div>
                <div class="pagination_wrapper mt-50">
                    <ul class="pagination justify-content-center">
                        <li><a class="Previous" href="#"><i class="fal fa-angle-left"></i></a></li>
                        <li><a class="number" href="#">1</a></li>
                        <li><a class="number active" href="#">2</a></li>
                        <li><a class="number" href="#">3</a></li>
                        <li><a class="next" href="#"><i class="fal fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
