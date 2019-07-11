<fieldset style="width:180px">
	<legend>Operations</legend>
		<a href="addform.php">Add |</a>
		<a href="editform.php">Edit |</a>
		<a href="deleteform.php">Delete |</a>
		<a href="export.php">Export</a>
</fieldset>
<?php
	$xml = new DomDocument;
	$xml->load('data.xml');
	$x = $xml->getElementsByTagName('Students')->item(0);
	$all_students = $x->getElementsByTagName('Student');
	$tf = 0;
	echo "<h1>CICT STUDENTS</h1>";
	echo "<table border='1'><tr>";
	echo "<th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Course</th>";
	echo "<th>Tution Fees</th></tr>";

	foreach($all_students as $each_student)
	{
		echo "<tr>";
		echo "<td>".$each_student->getElementsByTagName('id')->item(0)->nodeValue."</td>";
		echo "<td>".$each_student->getElementsByTagName('name')->item(0)->nodeValue."</td>";
		echo "<td>".$each_student->getElementsByTagName('course')->item(0)->nodeValue."</td>";
		echo "<td>".$each_student->getElementsByTagName('tuition')->item(0)->nodeValue."</td>";
		$tf = $tf + $each_student->getElementsByTagName('tuition')->item(0)->nodeValue;
	}
	echo "</table>";
	
	$ctr = $x->getElementsByTagName('Student')->length;
	echo "<h3>Numbe of CICT Students: $ctr</br>";
	echo "Total Tuition Fees: $tf</h3>";
?>
