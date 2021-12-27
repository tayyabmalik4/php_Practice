<?php

//Writing to a file in php
// echo "welcome";
// $fptr = fopen("myfile2.php", "w");
// fwrite($fptr, "this is the best file on this planet please dont argue with me on this one. and this is created by harry<br>");
// fwrite($fptr, "this is another file\n");
// fwrite($fptr, "this is another content\n");
// fclose($fptr);

$fptr = fopen("myfile2.php", "a");
fwrite ($fptr, "thsi is being appended to the file\n");
fclose($fptr);

?>