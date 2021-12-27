<?php

echo "welcome to tutrial 16 funchtion <br>";

function processmarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value) {
        $sum+=$value;
    }
    return $sum;
} 
function avgmarks($marksArr){
    $sum=0;
    $i=1;
    foreach ($marksArr as $value) {
        $sum+=$value;
        $i++;
    }
return $sum/$i;
}

$uzair=[85,90,70,75,85,95];
// $summarks=processMarks($uzair);
$summarks=avgmarks($uzair);
echo "Total marks scored by uzair out of 600 is $summarks <br>";

$zaheer=[90,95,94,80,93,99];
// $summarks=processMarks($zaheer);
$summarks=avgmarks($zaheer);
echo "the total makes of zaheer is $summarks <br>";

?>