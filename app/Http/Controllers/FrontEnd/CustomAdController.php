<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomAdController extends Controller
{

    public function index()
    {
        //
    }

    public function electronics()
    {
        return view('frontend.category.electronics');
    }

    public function mobile()
    {
        return view('frontend.category.mobile');
    }

    public function home()
    {
        return view('frontend.category.home');
    }

    public function transportation()
    {
        return view('frontend.category.transportation');
    }

    public function pet()
    {
        return view('frontend.category.pet');
    }

    public function property()
    {
        return view('frontend.category.property');
    }

    public function fashion()
    {
        return view('frontend.category.fashion');
    }

    public function hobby()
    {
        return view('frontend.category.hobby');
    }

    public function daily()
    {
        return view('frontend.category.daily');
    }

    public function factory()
    {
        return view('frontend.category.factory');
    }

    public function education()
    {
        return view('frontend.category.education');
    }

    public function job()
    {
        return view('frontend.category.job');
    }

    public function service()
    {
        return view('frontend.category.service');
    }

    public function agriculture()
    {
        return view('frontend.category.agricultural');
    }

    public function foreign()
    {
        return view('frontend.category.foreign');
    }

    public function personal()
    {
        return view('frontend.category.personal');
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
