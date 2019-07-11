<?php
    $xml = new DomDocument;
    $xml->Load('data.xml');
    $x = $xml->getElementsByTagName('pos')->item(0);
    $product = $x->getElementsByTagName('product');
    $itemNum = $_POST["del"];
    $i=0;   
    foreach($product as $eachProduct){
        if($eachProduct->getElementsByTagName('itemNum')->item(0)->nodeValue==$itemNum){
            echo "Record Deleted";
            break;
        }
        $i++;
    }
    $x->removeChild($product->item($i));
    $xml->Save('data.xml');
?>
<br><a href="index.php">BacK</a>