<?php
$name="Tayyab is a intallegent boy. And he is also a good web develper ";
echo "$name";
echo "<br>";

echo "The lenght of my string funchion is " .strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";

echo str_replace("Tayyab", "junaid", $name);
echo "<br>";

echo str_repeat($name, 5);
echo "<br>"; 
echo "<pre>";
echo rtrim("    This is a good boy     ");
echo "<br>";
echo ltrim("    This is a good boy     ");
echo "</pre>"; 


?>