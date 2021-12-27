<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

//creat a connection

$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful

if (!$conn){
    die("Soory we failed to connect:" . mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql= "DELETE FROM `phptrip` WHERE `Role` = 'great think' LIMIT 5";
$result = mysqli_query($conn, $sql);
$aff=mysqli_affected_rows($conn);
echo "<br>Number of affectef rows: $aff <br>";

if ($result){
    echo "Delete successfully";

}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error---> $err ";
}

?>