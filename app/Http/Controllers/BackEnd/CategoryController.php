<?php

namespace App\Http\Controllers\BackEnd;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id','Desc')->paginate('20');
        return view('backend.category.index',compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/backend/images/categories',$image_name);

        $document = $request->file('background');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/backend/images/categories',$document_name);

        Category::create([
           'name'=>$request->name,
           'image'=>$image_name,
           'type'=>$request->type,
           'description'=>$request->description,
           'background-image'=>$document_name
        ]);

        Session::flash('success','Successfully Created New Category');
        return redirect()->route('type.index');

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

    public function search(Request $request)
    {

    }
}
