@extends('app')

@section('content')
<div class="header container">Peta Tanah</div>
    <div class="container">
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

            // To add the marker to the map, call setMap();
            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"No Persil {{ $tanah->no_persil }}"
            });
            marker.setMap(map);

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
                content: contentString
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

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