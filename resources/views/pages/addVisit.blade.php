@extends('layouts.app') @section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Add a new visit</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form method="POST" action="{{ URL::to('add-visit') }}" class="form-horizontal">
                            
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="date" class="form-control" name="date" id="exampleInputEmail1"
                                    aria-describedby="Date" placeholder="Date" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Time</label>
                                <input type="time" class="form-control" name="time" id="exampleInputPassword1"
                                    placeholder="Time" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Duration</label>
                                <input type="number" class="form-control" name="duration" id="exampleInputPassword1"
                                    placeholder="Duration" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="
                           width: 100%;
                           ">Add</button>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="
                           width: 100%;
                           ">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">map</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection