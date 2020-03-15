<?php
	$doc_name = $_POST["filename"];
	$song = $_POST["song"];
	$results = $_POST["results"];
	
	if($doc_name != "")
	{
		$file = fopen("https://github.com/veronners/DigitSpanTask/tree/master/Files/".$doc_name.".csv", "a");
		fwrite($file, $song);
		fwrite($file, $results);
		fclose($file);
	} else {
		echo("Message delivery failed...");
	}
	
?>