<?php
	$xml = new DOMDocument('1.0', 'utf-8');
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->Load('data.xml');
	$id->nodeValue = $_POST['id'];
	$name->nodeValue = $_POST['name'];
	$course->nodeValue = $_POST['course'];
	$tuition->nodeValue = $_POST['tuition'];
	
	//Select the root element
	$element = $xml->getElementsByTagName('Students')->item(0);  
	
	//Load Child elements
	$id = $element->getElementsByTagName('id');
	$name = $element->getElementsByTagName('name');
	$course = $element->getElementsByTagName('course');
	$tuition = $element->getElementsByTagName('tuition');
	
	$id->nodeValue = $_POST['id'];
	$name->nodeValue = $_POST['name'];
	$course->nodeValue = $_POST['course'];
	$tuition->nodeValue = $_POST['tuition'];
	
	//Replace old elements with new
	$element->replaceChild($id, $id);
	$element->replaceChild($name, $name);
	$element->replaceChild($course, $course);
	$element->replaceChild($tuition, $tuition);
	$test = $xml->Save('data.xml');
	if($test)
		echo "Edited";
	
?>
<br/><a href="index.php">BACK</a>
