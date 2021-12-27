<?php

$fptr = fopen("myfile.php", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));
/*
//Reading the file line by line------>
while($a=fgets($fptr)){
    echo $a;
}
echo "end of the file has been reached";
*/

//Reading the file charactor by charactor------>
// echo fgetc($fptr);
/*
while($a=fgetc($fptr)){
    echo $a;
// break;
}
echo "end of the file has been reached";
*/
//Write a program which reads the content of a file until has been encountered

while ($a=fgetc($fptr)){
    echo $a;
    if ($a=="."){
        break;
    }
}
fclose ($fptr);

?>