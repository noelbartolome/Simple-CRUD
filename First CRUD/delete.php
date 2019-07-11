<?php
	$xml = new DomDocument;
	$xml->Load('data.xml');
	$x = $xml->getElementsByTagName('Students')->item(0);
	$student = $x->getElementsByTagName('Student');
	$id = $_POST["del"];
	$i = 0;
	foreach($student as $eachStudent) {
		if ($eachStudent->getElementsByTagName('id')->item(0)->nodeValue == $id) {
			echo "Account Deleted!!!!!!";
			break;
		}
		$i++;//increment if 'if' statement is false (not equal to inputted id)
	}
	$x->removeChild($student->item($i));
	$xml->Save('data.xml');
?>
<br/><a href="index.php">Back</a>