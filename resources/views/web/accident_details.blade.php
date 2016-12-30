@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"><h1 class="text-center">{{ $accident->title }} - {{ $accident->created_at->diffForHumans() }} </h1></div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div style="width: 100%;height: 300px;position: relative;">
                            <div id="map" style="width: 100%;height: 100%;position: absolute;left: 0;top: 0;"></div>
                        </div>
                        <div>{{ $accident->description }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 300px;overflow: hidden;">
                        <div class="carousel-inner">
                        @for($i=0;$i<count($accident->photos);$i++)
                            <div class="item {{ $i == 0 ? 'active' : '' }}">
                                <img src="{{ $accident->photos[$i]->photo }}" class="img img-thumbnail">
                            </div>
                            
                        @endfor
                        </div>
                    </div>
                    <table class="table">
                        <tr>
                            <th colspan="2">Identitas Pelapor</th>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $accident->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $accident->user->email }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $accident->user->address }}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>{{ $accident->user->phone }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lat" class="hidden">{{ $accident->latitude }}</div>
<div id="lng" class="hidden">{{ $accident->longitude }}</div>
<script type="text/javascript">
var map;
function initMap() {
    var lat = parseFloat(document.getElementById('lat').innerHTML);
    var lng = parseFloat(document.getElementById('lng').innerHTML);
    console.log(lat);
    console.log(lng);
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: lat, lng: lng},
        zoom: 15
    });
    var pos;
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var marker = new google.maps.Marker({
                map: map,
                animation: google.maps.Animation.DROP,
                position: new google.maps.LatLng(position.coords.latitude,position.coords.longitude)
            });
            setMark(pos.lat,pos.lng);
            console.log(map);
            console.log(pos);
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
    }


    google.maps.event.addListenerOnce(map, 'idle', function(){
        setMark(lat,lng);     
    });
    function setMark(lat,lng){
        var marker = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(lat, lng)
        });
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzLRVIst6pWFj9atlgyCA0995CIzLMa-E&callback=initMap" async defer></script>
@endsection
