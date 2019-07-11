<?php
 $xml = new DOMDocument('1.0', 'utf-8');
 $xml->formatOutput = true; 
 $xml->preserveWhiteSpace = false;
 $xml->load('examples.xml');

 //Get item Element
 $element = $xml->getElementsByTagName('person')->item(0);  

 //Load child elements
 $name = $element->getElementsByTagName('name')->item(0);
 $comment = $element->getElementsByTagName('comment')->item(0) ;

 //Replace old elements with new
 $element->replaceChild($name, $name);
 $element->replaceChild($comment, $comment);
 ?>

 <?php
 if (isset($_POST['submit']))
 {
$name->nodeValue = $_POST['namanya'];
$comment->nodeValue = $_POST['commentnya'];
htmlentities($xml->save('examples.xml'));

 }

 ?>

 <form method="POST" action=''>
  name <input type="text-name" value="<?php echo $name->nodeValue  ?>" name="namanya" />
comment  <input type="text-comment" value="<?php echo $comment->nodeValue  ?>"  name="commentnya"/>
 <input name="submit" type="submit" />
 </form>
