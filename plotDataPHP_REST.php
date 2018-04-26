<?php
	// Länk till nedladdade REST-biblioteket, lagt i mappem biblo i överordnad katalog.
	include('biblo/httpful.phar');

	// Hämta datat
	// http://öppnadata.se/dataset/kommunkoder
	$url = "https://mitt.sundsvall.se/api/waste/v1/waste.csv/?dateFrom=2018-01-01&dateTo=2018-01-04&nyko=1&type=Matavfall";
	$response = \Httpful\Request::get($url)
		->send();

	// var_dump($response);	// vad har vi fått?

	// stoppa in resultatet i en array.
	$rader = explode("\n", $response);

	// Plocka bort rubrikraden ur arrayen
	array_shift( $rader );

	// Skapa arrayer som är lämpliga för visualisering.
	$namnArr = array();
	$befArr = array();
//	$i=0;
	foreach ( $rader as $rad )
	{
		$rad = trim( $rad );
		$radData = str_getcsv( $rad, ";");
		if( count( $radData ) >= 5 )	// ev tomrader
		{
			$namnArr[] =  utf8_encode( $radData[1] );
			//$namnArr[] =  $radData[1];
			$befArr[] = (int)$radData[3];
		}
	}
	
	// Ett PHP-objekt, med JSON-kodat data anpassat för Plotly.
	$data = [ [
		"x" => $namnArr,
		"y" => $befArr,
		"type" => "bar"  
	] ];
	
	$ut = json_encode( $data ); 
	echo "{$ut}";
	
	//var_dump( $ut );	// kolla resultatet av json_encode.
	//var_dump( json_last_error_msg() );	// om json_encode gick fel, vad gick fel?

?>
