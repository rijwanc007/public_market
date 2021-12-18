@extends('backend.master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'backend.district.store','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-file-document-box"></i></span> Add New District</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> District Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter District Name" required>
                    </div>
                    <div class="form-group">
                        <label for="division_id">Select a division for this district</label>
                        <select class="form-control" name="division_id">
                            <option value="">Please select a division for the district</option>
                            @foreach ($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload District Photo :</label>
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
