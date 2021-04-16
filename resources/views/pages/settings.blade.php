@extends('layouts.app')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
        <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Alert Settings</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2">Here you may change the alert distance and the time span for which the contact tracing will be performed.</h6>
                                <hr class="rounded">
                                <form method="POST" action="{{ URL::to('setting') }}" class="form-horizontal">
                            
                            @csrf
                                    <div class="form-row">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Window</label>
                                        <input type="text" class="form-control" name="window" id="inputAddress" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Distance</label>
                                        <input type="text" class="form-control" name="distance" id="inputAddress2" required>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Report</button>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection