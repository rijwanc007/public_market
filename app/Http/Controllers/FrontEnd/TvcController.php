<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TvcController extends Controller
{

    public function index()
    {
        return view('frontend.tvc');
    }

    public function featured()
    {
        return redirect()->to('/'.'#Blog');
    }
    public function tvc_details(){
        return view('frontend.tvc-details');
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
