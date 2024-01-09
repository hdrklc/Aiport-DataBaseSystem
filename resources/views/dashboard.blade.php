@extends('layouts.app')
@section('styles')
    <style>
        .text-center {
            text-align: center;
        }

        #map {
            float: right;
            width: 1200px;
            height: 600px;
        }

        .leaflet-popup-content {
            width: 300px;
            height: 300px;
        }
    </style>
@endsection
@section('content')
    <h1 class='text-center'>Maps</h1>
    <div id='map'></div>
@endsection
@section('scripts')
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin=''/>
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script src='https://unpkg.com/leaflet-control-geocoder@2.4.0/dist/Control.Geocoder.js'></script>
    <script>
        let map, markers = [];

        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: 40.965278,
                    lng: 38.080556,
                },
                zoom: 5
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            map.on('click', mapClicked);
            initMarkers();
        }

        initMap();

        /* --------------------------- Initialize Markers --------------------------- */
        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<b>${data.position.lat},${data.position.lng}</b>
                <br>
                <b>Airport Name: ${data.name}</b>
               </b>
               <br>
              <b>Airport Type: ${data.type}</b>
              <br>
               <b>Owner:
               ${data.Owner} </b>
                <br>
               <b>City:
             ${data.City} </b>
               <br>
               <b>Address:
               ${data.Address}  </b>
               <br>
               <b>Open Date:
               ${data.OpenDate} </b>
               <br>
               <b>Altitude:
              ${data.altitude} </b>
               <br>
               <b>Website:
               <a href="https://${data.website}">${data.website}</a> </b>
               <br>
               <b>RunWayLength:
               ${data.RunWayLength} </b>
                <br>
               <b>RunWaySurface:
               ${data.RunWaySurface} </b>
                <br>
               <b>Number:
               <a href="tel:${data.Number}">${data.Number}</a> </b>
               <br>
               <b>Geometry Latitude:
                ${data.GeometryLatitude} </b>
               <br>
               <b>Geometry Longitude:
               ${data.GeometryLongitude} </b>
               <br>`);
                map.panTo(data.position);
                markers.push(marker)
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                draggable: data.draggable
            })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        /* ------------------------- Handle Map Click Event ------------------------- */
        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ------------------------ Handle Marker Click Event ----------------------- */
        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        /* ----------------------- Handle Marker DragEnd Event ---------------------- */
        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }

        function markerClicked(event, index) {
            map.setView(event.latlng, 15);

        }

        var airportIds = @json($initialMarkers);
        console.log(airportIds);
        airportIds.forEach(function (airport) {
            console.log("Havaalanı ID: " + airport.id + ", Adı: " + airport.name);
        });
    </script>

@endsection


