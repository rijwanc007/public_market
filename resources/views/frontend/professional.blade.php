@extends('frontend.master')
@section('title','Professional | PublicMarket')
@section('content')
@include('frontend.section.professional')
<br>
<div class="fade modal" id=availabilityModal aria-hidden=true aria-labelledby=availabilityModal data-bs-backdrop=static data-bs-keyboard=false tabindex=-1>
    <div class="modal-dialog">
        <div class=modal-content>
            <div class=modal-header>
                <h5 class=modal-title id=availabilityModalLabel>Set Availability</h5>
            </div>
            <div class=modal-body>
                <div>
                    <h5 class="text-center">
                        There Will Be A Date Picker Here
                    </h5>
                </div>
            </div>
            <div class=modal-footer>
                <button class="btn btn-secondary"type=button data-bs-dismiss=modal>Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
