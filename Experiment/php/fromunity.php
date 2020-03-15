<?php
	$doc_name = $_POST["filename"];
	$song = $_POST["song"];
	$results = $_POST["results"];
	
	if($doc_name != "")
	{
		$file = fopen($doc_name.".csv", "w");
		fwrite($file, $song);
		fwrite($file, $results);
		fclose($file);
		
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($doc_name.".csv"));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($doc_name.".csv"));
		readfile($doc_name.".csv");
		exit;
	} else {
		echo("Message delivery failed...");
	}	
?>
