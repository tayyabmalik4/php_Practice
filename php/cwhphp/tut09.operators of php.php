<?php
// operators in php
/*
1. arithmatic operators
2. assignment operators
3. comarison operators
4. logical operators
*/  
// Arithmatic Operators:
$a=45;
$b=8;
echo "For a+b, the result is " . ($a + $b) . "<br>";
echo "For a-b, the result is " . ($a - $b) . "<br>";
echo "For a*b, the result is " . ($a * $b) . "<br>";
echo "For a/b, the result is " . ($a / $b) . "<br>";
echo "For a%b, the result is " . ($a % $b) . "<br>";
echo "For a**d, the result is " . ($a**$b) . "<br>";


// Assigment operaters
// $x=$a;
// echo "the value of x is ": $x; . "<br>";
// $a+=77;
// echo "for a , the value is " . $a . "<br>";

// $a-=7;
// echo "for a , the value is " . $a . "<br>";

// $a*=10;
// echo "for a , the value is " . $a . "<br>";

// $a/=9;
// echo "for a , the value is " . $a . "<br>";

// comparison operators
// $x=9;
// $y=7;
// echo "The value of x==y is ";
// echo var_dump ($x==$y); 
// echo "<br>";

// echo "The value of x<>y is ";
// echo var_dump ($x<>$y); 
// echo "<br>";

// echo "The value of x<y is " ;
// echo var_dump ($x<$y); 
// echo "<br>";

// echo "The value of x>y is ";
// echo var_dump ($x>$y); 
// echo "<br>";

// echo "The value of x<=y is ";
// echo var_dump ($x<=$y); 
// echo "<br>";

// echo "The value of x>=y is ";
// echo var_dump ($x>=$y); 
// echo "<br>";

// echo "The value of x!=y is ";
// echo var_dump ($x!=$y); 
// echo "<br>";

// logical Operators

$m=true;
$n=false;

echo "the value of m and n is ";
echo var_dump($m and $n);
echo "<br>";

echo "the value of m && n is ";
echo var_dump($m && $n);
echo "<br>";

echo "the value of m or n is ";
echo var_dump($m or $n);
echo "<br>";

echo "the value of !n is ";
echo var_dump(!$n);
echo "<br>";

echo "the value of !m is ";
echo var_dump(!$m);
echo "<br>";
?>