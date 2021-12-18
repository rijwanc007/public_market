<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/','FrontEnd\IndexController');
Route::get('/','FrontEnd\IndexController@index')->name('frontend.index');
Route::get('/popular-ads','FrontEnd\IndexController@popular')->name('frontend.popular.ads');
Route::get('/recent-ads','FrontEnd\IndexController@recent')->name('frontend.recent.ads');

Route::resource('/category','FrontEnd\CategoryController');
Route::get('/category','FrontEnd\CategoryController@index')->name('frontend.category');

Route::resource('/tvc','FrontEnd\TvcController');
Route::get('/tvc','FrontEnd\TvcController@index')->name('frontend.tvc');
Route::get('/featured-tvc','FrontEnd\TvcController@featured')->name('frontend.featured-tvc');

Route::resource('/cv','FrontEnd\CvuploadController');
Route::get('/cv','FrontEnd\CvuploadController@index')->name('frontend.cvupload');

Route::resource('/vacancy','FrontEnd\VacancyController');
Route::get('/vacancy','FrontEnd\VacancyController@index')->name('frontend.vacancy');

Route::resource('/professional','FrontEnd\ProfessionalController');
Route::get('professional-create','FrontEnd\ProfessionalController@create')->name('frontend.professional-create');

Route::resource('/signin','FrontEnd\SignController');
Route::get('/signin','FrontEnd\SignController@index')->name('frontend.signin');

Route::resource('/reg','FrontEnd\RegisterController');
Route::get('/reg','FrontEnd\RegisterController@index')->name('frontend.register');

Route::resource('/dashboard','FrontEnd\DashBoardController');
Route::get('/dashboard','FrontEnd\DashBoardController@index')->name('frontend.dashboard');

Route::resource('/all-ads','FrontEnd\AllAdController');
Route::get('/all-ads','FrontEnd\AllAdController@index')->name('frontend.all-ads');
Route::get('/post-ads','FrontEnd\AllAdController@post')->name('frontend.post-ad');
Route::get('/post-mobile','FrontEnd\AllAdController@mobile')->name('frontend.post-mobile');
Route::get('/post-electronics','FrontEnd\AllAdController@electronics')->name('frontend.post-electronics');
Route::get('/post-home-living','FrontEnd\AllAdController@homeLiving')->name('frontend.post-home-living');
Route::get('/post-vehicles-transportation','FrontEnd\AllAdController@vehiclesTransportation')->name('frontend.post-vehicles-transportation');
Route::get('/post-daily-essential-product','FrontEnd\AllAdController@dailyEssentialProduct')->name('frontend.post-daily-essential-product');
Route::get('/post-health-beauty','FrontEnd\AllAdController@healthBeauty')->name('frontend.post-health-beauty');
Route::get('/post-garments-clothing','FrontEnd\AllAdController@garmentsClothing')->name('frontend.post-garments-clothing');
Route::get('/post-hobby-sports-baby','FrontEnd\AllAdController@hobbySportsBaby')->name('frontend.post-hobby-sports-baby');
Route::get('/post-agriculture-agro-product','FrontEnd\AllAdController@agricultureAgroProduct')->name('frontend.post-agriculture-agro-product');
Route::get('/post-business-industry','FrontEnd\AllAdController@businessIndustry')->name('frontend.post-business-industry');
Route::get('/post-education','FrontEnd\AllAdController@education')->name('frontend.post-education');
Route::get('/post-fuel-oil-gas','FrontEnd\AllAdController@fuelOilGas')->name('frontend.post-fuel-oil-gas');
Route::get('/post-real-state-property','FrontEnd\AllAdController@realStateProperty')->name('frontend.post-real-state-property');
Route::get('/post-pet-animals','FrontEnd\AllAdController@petAnimals')->name('frontend.post-pet-animals');
Route::get('/post-pm-food-bank-restaurants','FrontEnd\AllAdController@pmFoodBankRestaurants')->name('frontend.post-pm-food-bank-restaurants');
Route::get('/post-personal-advertisements','FrontEnd\AllAdController@personalAdvertisement')->name('frontend.post-personal-advertisements');
Route::get('/post-companies-product-branding','FrontEnd\AllAdController@companyProductBranding')->name('frontend.post-companies-product-branding');
Route::get('/post-service','FrontEnd\AllAdController@service')->name('frontend.post-service');
Route::get('/post-tour-travels','FrontEnd\AllAdController@tourTravels')->name('frontend.post-tour-travels');
Route::get('/post-local-business-point','FrontEnd\AllAdController@localBusinessPoint')->name('frontend.post-local-business-point');
Route::get('/post-resort-hotel-community-center','FrontEnd\AllAdController@resortHotelCommunityCenter')->name('frontend.post-resort-hotel-community-center');
Route::get('/post-rent-to-let','FrontEnd\AllAdController@rentToLet')->name('frontend.post-rent-to-let');
Route::get('/post-others','FrontEnd\AllAdController@others')->name('frontend.post-others');

Route::resource('/product','FrontEnd\ProductController');
Route::get('product-details','FrontEnd\ProductController@details')->name('frontend.product.details');

Route::resource('/location','FrontEnd\LocationController');
Route::get('/location','FrontEnd\LocationController@index')->name('frontend.location');

Route::resource('/district','FrontEnd\DistrictController');
Route::get('/district','FrontEnd\DistrictController@index')->name('frontend.district');

Route::resource('/location-ad','FrontEnd\LocationAdController');
Route::get('/location-ad','FrontEnd\LocationAdController@index')->name('frontend.location-ad');

Route::resource('/strategy','FrontEnd\StrategyController');
Route::get('/strategy','FrontEnd\StrategyController@index')->name('frontend.strategy');

Route::resource('/mission','FrontEnd\MissionController');
Route::get('/mission','FrontEnd\MissionController@index')->name('frontend.mission');

Route::resource('/team','FrontEnd\TeamController');
Route::get('/team','FrontEnd\TeamController@index')->name('frontend.team');

Route::resource('/tips','FrontEnd\TipController');
Route::get('/tips','FrontEnd\TipController@index')->name('frontend.tip');
Route::get('/tips-sell','FrontEnd\TipController@sell')->name('frontend.tips.sell');
Route::get('/tips-quick','FrontEnd\TipController@quick')->name('frontend.tips.quick');
Route::get('/tips-price','FrontEnd\TipController@price')->name('frontend.tips.price');
Route::get('/tips-professional','FrontEnd\TipController@professional')->name('frontend.tips.professional');

Route::resource('/contact-us','FrontEnd\ContactController');
Route::get('/contact-us','FrontEnd\ContactController@index')->name('frontend.contact');

Route::resource('/site-map','FrontEnd\SiteMapController');
Route::get('/site-map','FrontEnd\SiteMapController@index')->name('frontend.site-map');

Route::resource('/faq','FrontEnd\FaqController');
Route::get('/faq','FrontEnd\FaqController@index')->name('frontend.faq');

Route::resource('/safe','FrontEnd\SafeController');
Route::get('/safe','FrontEnd\SafeController@index')->name('frontend.safe');

Route::resource('/profile','FrontEnd\ProfileController');
Route::get('/profile-settings','FrontEnd\ProfileController@settings')->name('frontend.profile-settings');
Route::get('/profile-professional','FrontEnd\ProfileController@professional')->name('frontend.profile-professional');
Route::get('/profile-ads','FrontEnd\ProfileController@ads')->name('frontend.my.ads');
Route::get('/profile-messages','FrontEnd\ProfileController@message')->name('frontend.message');
Route::get('/profile-payment','FrontEnd\ProfileController@payment')->name('frontend.payment');
Route::get('/profile-favourites','FrontEnd\ProfileController@favourite')->name('frontend.favourite');
Route::get('/profile-privacy','FrontEnd\ProfileController@privacy')->name('frontend.privacy');
Route::get('/profile-membership','FrontEnd\ProfileController@membership')->name('frontend.dash.member');

Route::resource('/custom','FrontEnd\CustomAdController');
Route::get('/custom-electronics','FrontEnd\CustomAdController@electronics')->name('frontend.ad.electronics');
Route::get('/custom-mobile','FrontEnd\CustomAdController@mobile')->name('frontend.ad.mobile');
Route::get('/custom-home','FrontEnd\CustomAdController@home')->name('frontend.ad.home');
Route::get('/custom-transportation','FrontEnd\CustomAdController@transportation')->name('frontend.ad.transportation');
Route::get('/custom-pet','FrontEnd\CustomAdController@pet')->name('frontend.ad.pet');
Route::get('/custom-property','FrontEnd\CustomAdController@property')->name('frontend.ad.property');
Route::get('/custom-fashion','FrontEnd\CustomAdController@fashion')->name('frontend.ad.fashion');
Route::get('/custom-hobby','FrontEnd\CustomAdController@hobby')->name('frontend.ad.hobby');
Route::get('/custom-daily','FrontEnd\CustomAdController@daily')->name('frontend.ad.daily');
Route::get('/custom-factory','FrontEnd\CustomAdController@factory')->name('frontend.ad.factory');
Route::get('/custom-education','FrontEnd\CustomAdController@education')->name('frontend.ad.education');
Route::get('/custom-job','FrontEnd\CustomAdController@job')->name('frontend.ad.job');
Route::get('/custom-service','FrontEnd\CustomAdController@service')->name('frontend.ad.service');
Route::get('/custom-agriculture','FrontEnd\CustomAdController@agriculture')->name('frontend.ad.agriculture');
Route::get('/custom-foreign','FrontEnd\CustomAdController@foreign')->name('frontend.ad.foreign');
Route::get('/custom-personal','FrontEnd\CustomAdController@personal')->name('frontend.ad.personal');

Route::resource('/checkout','FrontEnd\CheckoutController');
Route::get('/checkout','FrontEnd\CheckoutController@index')->name('frontend.checkout');

Route::resource('/service','FrontEnd\ServiceController');
Route::get('/service','FrontEnd\ServiceController@index')->name('frontend.service');

Route::resource('/member','FrontEnd\MemberController');
Route::get('/member-about','FrontEnd\MemberController@about')->name('frontend.member.about');

Route::resource('/doorstep','FrontEnd\DoorStepDeliveryController');
Route::get('/doorstep','FrontEnd\DoorStepDeliveryController@index')->name('frontend.doorstep.delivery');
Route::get('/doorstep-all-store','FrontEnd\DoorStepDeals@index')->name('frontend.doorstep.deals');

Route::resource('/banner-ads','FrontEnd\BannerController');
Route::get('/banner-ads','FrontEnd\BannerController@index')->name('frontend.banner');

Route::resource('/selling-tips','FrontEnd\SellingTipsController');
Route::get('/selling-tips','FrontEnd\SellingTipsController@index')->name('frontend.selling-tips');

Route::resource('/buy-sell-quickly','FrontEnd\BuySellQuicklyController');
Route::get('/buy-sell-quickly','FrontEnd\BuySellQuicklyController@index')->name('frontend.buy-sell-quickly');

Route::resource('/pricing-tips','FrontEnd\PricingTipsController');
Route::get('/pricing-tips','FrontEnd\PricingTipsController@index')->name('frontend.pricing-tips');

Route::resource('/promote-your-ads','FrontEnd\PromoteYourAdsTipsController');
Route::get('/promote-your-ads','FrontEnd\PromoteYourAdsTipsController@index')->name('frontend.promote-your-ads');

Route::resource('/payment','FrontEnd\PaymentController');
Route::get('/payment-option','FrontEnd\PaymentController@option')->name('frontend.payment.option');
Route::get('/payment-pos','FrontEnd\PaymentController@pos')->name('frontend.payment.pos');
Route::get('/payment-bkash','FrontEnd\PaymentController@bkash')->name('frontend.payment.bkash');

Route::resource('/store','FrontEnd\StoreController');
Route::get('/store','FrontEnd\StoreController@index')->name('frontend.store');

Route::get('/testimonial','FrontEnd\TestimonialController@index')->name('testimonial.index');
Route::get('/promote','FrontEnd\PromoteProductController@index')->name('promote.index');
Route::get('/single_promote','FrontEnd\PromoteProductController@single_promote')->name('single_promote.index');
Route::get('/report','FrontEnd\PromoteProductController@report')->name('report.index');
Route::get('/blog','FrontEnd\PromoteProductController@blog')->name('report.blog');
Route::get('/cv-bank','FrontEnd\PromoteProductController@cvbank')->name('frontend.cvbank');
Route::get('/job','FrontEnd\PromoteProductController@job')->name('frontend.job.index');
Route::get('/job-details','FrontEnd\PromoteProductController@job_details')->name('job.details');

Route::get('/tvc-upload','FrontEnd\TvcuploadController@tvc_upload')->name('tvc.upload');
Route::get('/tvc-details','FrontEnd\TvcController@tvc_details')->name('frontend.tvc.details');

Route::get('/term-condition','FrontEnd\TermConditionController@index')->name('frontend.term-condition');
Route::get('/privacy-policy','FrontEnd\PrivacyPolicyController@index')->name('frontend.privacy-policy');

Route::get('/live-chat','FrontEnd\liveChatController@index')->name('frontend.live-chat');

//for subscribe
Route::get('/subscribe','FrontEnd\SubscribeController@store')->name('frontend.subscribe.store');

//for Division
Route::get('/backend/division','BackEnd\DivisionController@index')->name('backend.division');
Route::get('/backend/division-create','BackEnd\DivisionController@create')->name('backend.division.create');
Route::post('/backend/division-store','BackEnd\DivisionController@store')->name('backend.division.store');
Route::delete('/backend/division-delete/{id}', 'BackEnd\DivisionController@destroy')->name('backend.division.destroy');

//for District
Route::get('/backend/district','BackEnd\DistrictController@index')->name('backend.district');
Route::get('/backend/district-create','BackEnd\DistrictController@create')->name('backend.district.create');
Route::post('/backend/district-store','BackEnd\DistrictController@store')->name('backend.district.store');
Route::delete('/backend/district-delete/{id}', 'BackEnd\DistrictController@destroy')->name('backend.district.destroy');



Auth::routes();
Route::group(['middleware'=>['preventbackbutton','auth']], function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('user','BackEnd\UserController');
    Route::get('user-index','BackEnd\UserController@index')->name('user.index');
    Route::get('user-create','BackEnd\UserController@create')->name('user.create');
    Route::get('user-search','BackEnd\UserController@search')->name('user.search');

    Route::resource('type','BackEnd\CategoryController');
    Route::get('type-index','BackEnd\CategoryController@index')->name('type.index');
    Route::get('type-create','BackEnd\CategoryController@create')->name('type.create');
    Route::get('type-search','BackEnd\CategoryController@search')->name('type.search');
});
