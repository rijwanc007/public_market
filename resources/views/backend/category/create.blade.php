@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'type.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-file-document-box"></i></span> Add New Category</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Category Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
                    </div>
                    <div class="form-group">
                        <label for="description"> Category Description :</label>
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter Category Description" rows="3" style="resize: none;" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Category Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
{{--                        <p class="warn-p pt-3">*** The Image Width*Height Must Be 185*185 ***</p>--}}
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Category Background Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="background" accept=".png, .jpg, .jpeg" required/>
                        {{--                        <p class="warn-p pt-3">*** The Image Width*Height Must Be 185*185 ***</p>--}}
                    </div>
                    <div class="form-group">
                        <label for="type">Category Type :</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="Regular" selected>Regular</option>
                            <option value="Popular">Popular</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-file-document-box"></i> Create Category</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
