<?php
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->Load('data.xml');
	$id = $_POST["id"];
	$name = $_POST["name"];
	$course = $_POST["course"];
	$tuition = $_POST["tuition"];
	$newStudent = $xml->createElement('Student');
	$newStudent->appendChild($xml->createElement('id', $id));
	$newStudent->appendChild($xml->createElement('name', $name));
	$newStudent->appendChild($xml->createElement('course', $course));
	$newStudent->appendChild($xml->createElement('tuition', $tuition));
	$xml->getElementsByTagName('Students')->item(0)->appendChild($newStudent);
	$test = $xml->Save('data.xml');
	if($test)
		echo "Sucessfully Added!";
?>
<br/><a href="index.php">BACK</a>
