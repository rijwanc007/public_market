<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipController extends Controller
{

    public function index()
    {
        return view('frontend.tip');
    }

    public function sell()
    {
        return redirect()->to('/tips'.'#sellTips');
    }

    public function quick()
    {
        return redirect()->to('/tips'.'#quick');
    }

    public function price()
    {
        return redirect()->to('/tips'.'#priceTips');
    }

    public function professional()
    {
        return redirect()->to('/tips'.'#proTips');
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
