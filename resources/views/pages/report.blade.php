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
                                    <h3 class="m-0">Report an Infection</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2">Please report the date and time when you were tested positive for <br> COVID-19.</h6>
                                <hr class="rounded">
                                <form method="POST" action="{{ URL::to('reports') }}" class="form-horizontal">
                            
                            @csrf
                                    <div class="form-row">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Date</label>
                                        <input type="date" class="form-control" name="date" id="inputAddress" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2">Time</label>
                                        <input type="time" class="form-control" name="time" id="inputAddress2" required>
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