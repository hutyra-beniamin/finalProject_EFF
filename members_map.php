<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'templates/header.php';

if (isset($_SESSION['user']) != "") {
    require_once 'templates/admin.php';
}

require_once 'templates/nav.php';
?>

<head>
    <style>
        #map {
            height: 50vh;
        }
    </style>
</head>

<body>
    <div class="container mx-auto w-100" id="map">
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&sensor=false"></script>
    <script>
        let map;
        function initialize() {
            geocoder = new google.maps.Geocoder();
            map = new google.maps.Map(document.getElementById('map'));
            let addresses;
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    addresses = JSON.parse(this.responseText).map(entrepreneur => entrepreneur.city);
                }
            };
            xhttp.open("GET", "http://server01.time4tech.at:8080/finalProject_EFF/get_json.php?table=entrepreneurs&distinct=city", false);
            xhttp.send();
            //sets north-east and south-west of map
            let bounds = new google.maps.LatLngBounds(new google.maps.LatLng(46.250135, 9.081696),
                new google.maps.LatLng(49.118814, 17.167633));
            map.fitBounds(bounds);
            //fixes zoom
            /* let listener = google.maps.event.addListener(map, "idle", function() {
                map.setZoom(map.getZoom() + 0.5);
                google.maps.event.removeListener(listener);
            }); */
            for (address of addresses) {
                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            icon: 'http://maps.google.com/mapfiles/kml/pal2/icon4.png'
                        });
                    } /* else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                        wait = true;
                        setTimeout("wait = true", 2000);
                        //alert("OQL: " + status);
                    } */ else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                })
            }
        }
        //google.maps.event.addDomListener(window, 'resize', initialize);
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <br>
    <hr>

    <?php
    require_once 'templates/footer.php';
    ?>