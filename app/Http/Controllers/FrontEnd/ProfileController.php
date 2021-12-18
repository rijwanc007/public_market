<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        //
    }

    public function settings()
    {
        return view('frontend.profile-settings');
    }

    public function professional()
    {
        return view('frontend.professional');
    }

    public function ads()
    {
        return view('frontend.myads');
    }

    public function message()
    {
        return view('frontend.message');
    }

    public function payment()
    {
        return view('frontend.payment');
    }

    public function favourite()
    {
        return view('frontend.favourite');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function membership()
    {
        return view('frontend.membership-dash');
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
