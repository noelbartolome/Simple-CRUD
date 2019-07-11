<?php
	$xml = new DomDocument;
	$xml->Load('data.xml');
	$x = $xml->getElementsByTagName('Students')->item(0);
	$id = $_POST["id"];
	$name = $_POST["name"];
	$course = $_POST["course"];
	$tuition = $_POST["tuition"];
	$allStud = $xml->getElementsByTagName('Student')->length;
	for($i=0;$i<$allStud;$i++){
		$each_id = $xml->getElementsByTagName('id')->item($i)->nodeValue;
		if ($each_id==$id){//if found
			$student = $xml->getElementsByTagName('Student')->item($i);//get the address of the matched item
			$newNode = $xml->createElement('Student');
			$newId = $xml->createElement('id', $id);
			$newName = $xml->createElement('name', $name);
			$newCourse = $xml->createElement('course', $course);
			$newTuition = $xml->createElement('tuition', $tuition);
			$newNode->appendChild($newId);
			$newNode->appendChild($newName);
			$newNode->appendChild($newCourse);
			$newNode->appendChild($newTuition);
			$x->replaceChild($newNode, $student);
		}
	}
	echo "Student ID: " . $id . "<br/>";
	echo "Student's Name: " . $name . "</p> </p>";
	echo "Details Updated...";
	$xml->Save('data.xml');
?>
<br/><a href="index.php">Back</a>