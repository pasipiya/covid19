@extends('layouts.app')
@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Welcome</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                       <p> Hi <b>{{ Auth::user()->name }}</b> you might hava had a connection to an infected person at the location shown in red.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                    <div class="card_box box_shadow mb_30">
                    <div id="googleMap" style="width:100%;height:400px;"></div>
                    </div>
                    
                </div>
        </div>
    </div>
    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(24.9207,67.0657),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</div>
@endsection