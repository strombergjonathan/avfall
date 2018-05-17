
<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta name="view" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="utf-8">
    <title>Stationer</title>
    <style>

      #map {
	  height: 100%
	  }
      html, body {
        height: 100%;
        margin: 0;
        padding: 10px;
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
  


  <h2>I kartan nedan visar vi de stora återvinningsstationerna i Sundsvallstrakten. </h2>
  
    <div id="map"></div>
    <script>
// Skapar en funktion med namnet initMap.
      function initMap() {
//Skapar en karta 
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: {lat: 62.390811, lng: 17.306926999999973}
        });
        // Skapar en array med alfabetets bokstäver som använd för att märke de olika punkterna.
        
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Lägger till punkter i kartan.
        // Skapar en array baserad på våra punkter(återviningsstationer)
        // map() metoden har inget att göra med google maps API.
        
        
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

       
        // Skapar ett Cluster för punkterna på kartan. 
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
      {lat: 62.3883269, lng: 17.315367000000037},
		{lat: 62.3086771, lng: 17.375304099999994},
        {lat: 62.4398423, lng: 17.38845379999998},
		{lat: 62.41875099999999, lng: 17.344162900000015},
		{lat: 62.39455820000001, lng: 17.25011500000005},
        {lat: 62.37767439999999, lng: 17.346285599999987},
		{lat: 62.413617, lng: 17.165619600000014}
		

	
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlPHpelqZ4zFYixbA9EtXR9FJXVzwA-ag&callback=initMap">
    </script>


    
  </body>
</html>