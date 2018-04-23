<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<title>Avfallshantering i Sundsvall!!</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
<?php 
include("includes/header.php");


include("includes/mainmenu.php");




?>





<div class="dropdown">
  <button class="dropbtn">Välj område</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4..</a>
    <a href="#">Link 5...</a>
    <a href="#">Link 6...</a>
    <a href="#">Link 7...</a>
    <a href="#">Link 8...</a>

  </div>


</div>


<div id="graf" >
<h1>Plott av data</h1>


<div id="myDiv"></div>

<script>
Plotly.d3.csv("https://mitt.sundsvall.se/api/waste/v1/waste.json/?dateFrom=2012-01-03&dateTo=2012-01-04&nyko=1&building=Verksamhetsavfall&building=Hyresfastighet&type=Matavfall&weightFrom=3&weightTo=13&pretty=true", function(err, rows){

  function unpack(rows, key) {
  return rows.map(function(row) { return row[key]; });
}


var trace1 = {
  type: "scatter",
  mode: "lines",
  x: "date",
  y: "weight",
  line: {color: '#17BECF'}

}

var data = [trace1];

var layout = {
  title: 'Sundsvalls avfall',
  xaxis: {
    range: ['2017-01-03', '2018-01-05'],
    type: 'date'
  },
  yaxis: {
    autorange: true,
	range: [0, 2000],
    type: 'linear'
  }
};

Plotly.newPlot('myDiv', data, layout);
})
</script>



<?php
Include("includes/footer.php")



?>


</body>
</html>