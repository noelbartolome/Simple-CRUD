<?php
    $xml = new DomDocument;
    $xml -> Load('data.xml');
    $x = $xml -> getElementsByTagName('pos')->item(0);
    $itemNum = $_POST["itemNum"];
    $desc = $_POST["desc"];
    $loc = $_POST["loc"];
    $quantt = $_POST["quantt"];
    $price = $_POST["price"];
    $aproduct = $xml->getElementsByTagName('product')->length;
    for($i=0;$i<$aproduct;$i++){
        $each_itemNum = $xml -> getElementsByTagName('itemNum')->item($i)->nodeValue;
        if($each_itemNum == $itemNum){
            $product = $xml->getElementsByTagName('product')->item($i);
            $newNode = $xml->createElement('product');
            $newItemNum = $xml->createElement('itemNum',$itemNum);
            $newDesc = $xml->createElement('desc',$desc);
            $newLoc = $xml->createElement('loc',$loc);
            $newQuantt = $xml->createElement('quantt',$quantt);
            $newPrice = $xml->createElement('price',$price);
            $newNode->appendChild($newItemNum);
            $newNode->appendChild($newDesc);
            $newNode->appendChild($newLoc);
            $newNode->appendChild($newQuantt);
            $newNode->appendChild($newPrice);
            $x->replaceChild($newNode,$product);
        }
    }
    echo "Updated";
    $xml->Save('data.xml');
?>
<br> <a href="index.php">Back</a>