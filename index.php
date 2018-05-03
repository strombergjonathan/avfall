<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script> 

	<title>Avfallshantering i Sundsvall</title>
  <meta charset="utf-8"/>
  
  <link rel="stylesheet" href="css/style.css" type="text/css">
  
	<script>
		function loadDoc() {
			var xhttp = new XMLHttpRequest();
		
			xhttp.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200)
				{
					var data = JSON.parse(this.responseText);
					Plotly.newPlot('graf', data );
				}
			};
		
			xhttp.open("GET", "plotDataPHP_REST.php", true);
			//xhttp.open("POST", "plotDataPHP_REST.php", true);
			xhttp.send();
		}
	
  </script>
</head>

<body onload="loadDoc()">



<?php 
include("includes/header.php");


include("includes/mainmenu.php");




?>










<h1>Ta en kaffe så kommer datat visas här snart!</h1>


<div id="graf" style="width: 1200px; height: 400px;"><!-- Plotly ritas här --></div>


<div id="sidebar" class="sidebar">

<h3>Områdesbeskrivning till tabellen</h3>
<p1>
	11 = Granlo/Bergsåker <br/>
	12 = Birsta/Ljustadalen <br/>
	13 = Haga/Bosvedjan/Skönsberg <br/> 
	14 = Skönsmon <br/> 
	15 = Nacksta/Södermalm<br/> 
	16 = City<br/> 


	</p1>
	</div>

<?php
Include("includes/footer.php")



?>


</body>
</html>