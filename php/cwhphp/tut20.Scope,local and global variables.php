<?php
$a=98;      // Globle variables
$b=9;

echo "Welcome to scope and local global variables in php<br>";
function printvalue(){
    // $a=97;        // Local variables
    global $a, $b;   // Give me the access to this globle variable
    $a=100;
    $b=1000;

    echo "The value of your variable a is  $a and b is $b <br>";
}

// echo $a;
printvalue();
echo "The value of your variable a is  $a and b is $b <br>";
echo "<br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>