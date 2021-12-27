<?php
echo "This is associative arrays tuturial<br>";
//These are called indexed arrays

// $arr= array("this", "that", "THEY");
// echo "<br>";
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

//Associative arrays
$favCol=array('uzair'=>'red' , 'mohsan'=>'green', 'zaheer'=>'blue' , 
'Tayyab'=>'black'  , '8'=>'this');
foreach ($favCol as $key => $value) {
    echo "<br>favorite color of $key is $value";
}

// echo $favCol['uzair'];
// echo '<br>';
// echo $favCol['zaheer'];
// echo '<br>';
// echo $favCol['mohsan'];
// echo '<br>';
// echo $favCol['Tayyab'];
// echo '<br>';
// echo $favCol['8'];
// echo '<br>';

?>