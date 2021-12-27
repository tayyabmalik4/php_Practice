<?php
// include 'database connect.php';
require 'database connect.php';


$sql= "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num=mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";

while($row=mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['S no.']  . ". Hello ". $row['Name'] . " welcome to " . $row['Role'];
    echo "<br>";
}

?>