@extends('app')

@section('content')
<div class="header container">Peta Tanah</div>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href="{{ URL::to('/tanah') }}">Pertanahan</a></li>
            <li><a href="{{ URL::to("/tanah/$tanah->id") }}">{{ $tanah->nama }}</a></li>
            <li class="active">Peta</li>
        </ol>
        <div class="col-md-1" id="map-canvas"></div>
    </div>
</div>


@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(-6.717937, 107.454343);

            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: myLatlng,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            // Define the LatLng coordinates for the polygon's path.
        @if(count($koordinat)>0)
            var pointCoords = [
                    @foreach($koordinat as $row)
                        new google.maps.LatLng( {{ $row->latitude }} , {{ $row->longitude }} ),
                    @endforeach
                    new google.maps.LatLng( {{ $koordinat[0]['latitude'] }} , {{ $koordinat[0]['longitude'] }} ),
            ];

            // Define layer
            layer = new google.maps.Polygon({
                paths: pointCoords,
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#FF0000',
                fillOpacity: 0.35
            });

            layer.setMap(map);

            // Tooltip
            var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h3 id="firstHeading" class="firstHeading">Detail</h3>'+
                    '<div id="bodyContent">'+
                    '<p>No Persil : {{ $tanah->no_persil }}<br>'+
                    'Luas Tanah : {{ $tanah->luas }}<br>'+
                    'Status Tanah : @if($tanah->masalah){{'bermasalah'}}@else{{'tidak bermasalah'}}@endif dan '+
                    '@if($tanah->keberatan){{'ada keberatan'}}@else{{'tidak ada keberatan'}}@endif</p>'+
                    '</div>'+
                    '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                position: new google.maps.LatLng( {{ $koordinat[0]['latitude'] }} , {{ $koordinat[0]['longitude'] }} )
            });

            google.maps.event.addListener(layer, 'click', function() {
                infowindow.open(map,layer);
            });
        @endif

        }
        google.maps.event.addDomListener(window, 'load', initialize);


    </script>
@endsection

@section('css')
    <style>
        #map-canvas {
            width: 1000px;
            height: 400px;
        }
    </style>
@endsection