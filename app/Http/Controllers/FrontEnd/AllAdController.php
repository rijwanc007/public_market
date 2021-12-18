<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllAdController extends Controller
{

    public function index()
    {
        return view('frontend.all-ads');
    }

    public function post()
    {
        return view('frontend.post-ad');
    }

    public function mobile()
    {
        return view('frontend.ad-mobile');
    }
    public function electronics()
    {
        return view('frontend.add-electronics');
    }
    public function homeLiving()
    {
        return view('frontend.ad-home-living');
    }
    public function vehiclesTransportation()
    {
        return view('frontend.ad-vehicles-transportation');
    }
    public function dailyEssentialProduct()
    {
        return view('frontend.ad-daily-essential-product');
    }
    public function healthBeauty()
    {
        return view('frontend.ad-health-beauty');
    }
    public function garmentsClothing()
    {
        return view('frontend.ad-garments-clothing');
    }
    public function hobbySportsBaby(){
        return view('frontend.ad-hobby-sports-baby');
    }
    public function agricultureAgroProduct(){
        return view('frontend.ad-agriculture-agro-product');
    }
    public function businessIndustry(){
        return view('frontend.ad-business-industry');
    }
    public function education(){
        return view('frontend.ad-education');
    }
    public function fuelOilGas(){
        return view('frontend.ad-fuel-oil-gas');
    }
    public function realStateProperty(){
        return view('frontend.ad-real-state-property');
    }
    public function petAnimals(){
        return view('frontend.ad-pet-animals');
    }
    public function pmFoodBankRestaurants(){
        return view('frontend.ad-pm-food-bank-restaurants');
    }
    public function personalAdvertisement(){
        return view('frontend.ad-personal-advertisement');
    }
    public function companyProductBranding()
    {
        return view('frontend.ad-companies-product-branding');
    }
    public function service(){
        return view('frontend.ad-service');
    }
    public function tourTravels(){
        return view('frontend.ad-tour-travels');
    }
    public function localBusinessPoint(){
        return view('frontend.ad-local-business-point');
    }
    public function resortHotelCommunityCenter(){
        return view('frontend.ad-resort-hotel-community-center');
    }
    public function rentToLet(){
        return view('frontend.ad-rent-to-let');
    }
    public function others()
    {
        return view('frontend.ad-others');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
