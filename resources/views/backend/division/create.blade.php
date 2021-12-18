@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'backend.division.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-file-document-box"></i></span> Add New Division</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Division Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Division Name" required>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Division Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
                        {{--                        <p class="warn-p pt-3">*** The Image Width*Height Must Be 185*185 ***</p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-file-document-box"></i> Create Division</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
