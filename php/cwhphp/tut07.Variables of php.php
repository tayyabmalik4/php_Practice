<?php
$name="harry";
$income=200;

/* data types:
1. string
2. integer
3. float
4. boleian
5. object
6. array
7. Null
*/

// string - sequance of charactors
$name='harry';
$friend='Rohan';
echo "$name ka friend is $friend<br>";

// integer - non decimal numbers
$income=455;
$debts=-655;
echo "$income<br>";
echo "$debts<br>";

//floating data  type

$zahid=455.5;
$Junaid=456.7;
echo "$zahid<br>";
echo "$Junaid<br>";

// Boolean data type------can be either true or false:
$x=true;
$y=false;
echo var_dump ($x);
echo "<br>";
echo var_dump ($y);
echo "<br>";

//object data type----->instance of classes
// employ is a class -----> harry can be object

// Array - used to store multiple values in a single variable
$friends = array ("Junaid", "zahid", "uzair", "Zaheer", "Mohsin");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";
//null
$name=NULL;
echo var_dump($name);
?> 