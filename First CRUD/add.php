<?php
    $xml = new DOMDocument;
    $xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
    $xml->Load('data.xml');
    $itemNum = $_POST["itemNum"];
    $desc = $_POST["desc"];
    $loc = $_POST["loc"];
    $quantt = $_POST["quantt"];
    $price = $_POST["price"];
    $newProduct = $xml->createElement('product');
    $newProduct -> appendChild($xml->createElement('itemNum',$itemNum));
    $newProduct -> appendChild($xml->createElement('desc',$desc));
    $newProduct -> appendChild($xml->createElement('loc',$loc));
    $newProduct -> appendChild($xml->createElement('quantt',$quantt));
    $newProduct -> appendChild($xml->createElement('price',$price));
    $xml->getElementsByTagName('pos')->item(0)->appendChild($newProduct);
    $test = $xml->Save('data.xml');
    if($test)
        echo"Sucessfully Added!";
?>
<br><a href="index.php">BACK</a>