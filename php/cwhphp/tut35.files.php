<?php

$fptr = fopen("myfile.php", "r");
// echo var_dump($fptr);
if (!$fptr){
    die ("unable to open this file. please enter a vali filename");
}
$content = fread($fptr, filesize("myfile.php"));
echo $content;
fclose($fptr);

?>