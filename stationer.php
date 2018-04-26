
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Återvinningsstationer</title>
    <style>

      #map {
	  height: 80%
	  }
      html, body {
        height: 100%;
        margin: 0;
        padding: 10;
      }
	   #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }
    </style>
  </head>
  <body>
  


  <h2>Återvinningsstationer </h2>
    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: {lat: 62.390811, lng: 17.306926999999973}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
      {lat: 62.3883269, lng: 17.315367000000037},
		{lat: 62.3086771, lng: 17.375304099999994},
        {lat: 62.4398423, lng: 17.38845379999998},
		{lat: 62.41875099999999, lng: 17.344162900000015},
		{lat: 62.39455820000001, lng: 17.25011500000005}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlPHpelqZ4zFYixbA9EtXR9FJXVzwA-ag&callback=initMap">
    </script>
  </body>
</html>