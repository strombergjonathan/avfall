<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script> 

	<title>Avfallshantering i Sundsvall!hej!hejigen!!</title>
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
<body>
<?php 
include("includes/header.php");


include("includes/mainmenu.php");




?>








</div>


<div id="graf" style="width: 1200px; height: 400px;"><!-- Plotly ritas här --></div>

<h1>Plott av data</h1>
<p>Data hämta från php, som i sin tur hämtar från en annan server via REST.</p>

<button type="button" onclick="loadDoc()">Ladda om</button>



<?php
Include("includes/footer.php")



?>


</body>
</html>