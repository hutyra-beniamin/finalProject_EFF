<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  

$sql = "SELECT * FROM `entrepreneurs`";
$result = $connect->query($sql);

if($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$address = $row["city"];

}}
?>

<head>
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 90%;
            width: 95%;
            /* margin: auto; */
            margin-left: 1vw;
            margin-right: 1vw;
        }

        /* Optional: Makes the sample page fill the window. */
        /* html,
        body {
            height: 100%;
            width: 85%;
            margin: auto;
            padding: 0;
        } */
    </style>
</head>

<body>

    <input class="ml-4" type="text" id="address">
    <button  value="address" onclick="getLocation()">Alle Mitgliedsunternehmen anzeigen</button>
    <div id="map"></div>
    
    <script>
        var geocoder;
        var vienna = { lat: 48.255318, lng: 16.479655 };
        // var pinpoints = [{ lt: 48.20849, lg: 16.37208 }, { lt: 48.147608, lg: 17.106294 }, { lt: 48.45455, lg: 14.37208 }];
        // console.log(pinpoints.length);
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var mlocation = {
                lat: 47.79941, 
                lng: 13.04399
            };
            var nlocation = {
                lat: 48.20849,
                lng: 15.37208
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: mlocation,
                zoom: 7
            });

            var pinpoint = new google.maps.Marker({
                        position: vienna,
                        map: map,
                        icon: 'http://maps.google.com/mapfiles/kml/pal2/icon4.png'
            });
            /*for (i = 0; i < pinpoints.length; i++) {
                console.log(i);
                var pinpoint = new google.maps.Marker({
                    position: { lat: pinpoints[i].lt, lng: pinpoints[i].lg },
                    map: map
                });
            }*/
        }
            function getLocation() {
                var address = document.getElementById('address').value;
                console.log(address);
                geocoder.geocode({ 'address': address }, function(results, status) {
                    if (status == 'OK') {
                        map.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            icon: 'http://maps.google.com/mapfiles/kml/pal2/icon4.png'
                        });



                        console.log(results);
                    } else {
                        console.table(results);
                        alert('It was not possible to perform your request due to ' + status);
                    }

                })
            };
            /*var pinpoint = new google.maps.Marker({
              position: mlocation,
              map: map
            });
            var pinpoint2 = new google.maps.Marker({
                position: nlocation,
                map: map
              });*/
                 
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initialize"
        async defer></script>

<br><hr>

<?php
require_once 'templates/footer.php';
?>