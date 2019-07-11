<?php
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->Load('data.xml');
	$id = $_POST['id'];	
	$delete = $xml->documentElement;
	$remove = $delete->getElementsByTagName('Student');
	$xml->Save('data.xml');
?>