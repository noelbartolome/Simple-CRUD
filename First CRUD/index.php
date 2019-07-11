<?php
    $xml= new DomDocument;
    $xml->load('data.xml');
    $x = $xml->getElementsByTagName('pos')->item(0);
    $aproduct = $x->getElementsByTagName('product');
    $totalPrice = 0;
    $grandPrice = 0;
    echo "<h1>Escobar Computer Store Shop</h1>";
    echo "<table  border = '1'>   <tr>";
    echo "<th>Item #</th>";
    echo "<th>Description</th>";
    echo "<th>Location</th>";
    echo "<th>Quantity</th>";
    echo "<th>Price</th>";
    echo "<th>Total Price</th></tr>";
    foreach($aproduct as $each_product)
    {
        echo "<tr>";
        echo "<td>".$each_product->getElementsByTagName('itemNum')->item(0)->nodeValue."</td>";
        echo "<td>".$each_product->getElementsByTagName('desc')->item(0)->nodeValue."</td>";
        echo "<td>".$each_product->getElementsByTagName('loc')->item(0)->nodeValue."</td>";
        echo "<td>".$each_product->getElementsByTagName('quantt')->item(0)->nodeValue."</td>";
        echo "<td>".$each_product->getElementsByTagName('price')->item(0)->nodeValue."</td>";
        $price = $each_product->getElementsByTagName('price')->item(0)->nodeValue;
        $quantt = $each_product->getElementsByTagName('quantt')->item(0)->nodeValue;
        $totalPrice= $price * $quantt;
        echo "<td>$totalPrice</td>";
        $grandPrice+=$totalPrice;
    }
    echo "</table>";
    echo "<h1>GRAND TOTAL : $grandPrice</h1>";


    

?>      
<fieldset style="width:100px">
	<legend>Operations</legend>
        <a href="addform.php">Add Record</a>
		<a href="editform.php">Edit Record</a>
		<a href="deleteform.php">Delete Record</a>
		<a href="export.php">Export Record</a>
</fieldset>