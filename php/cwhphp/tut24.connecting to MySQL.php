<?php

echo "Welcome to the stage where ready to get connecting to a database<br>";

// Ways to connectto to a MySQL data base
//1. MySQLi extention
//2. PDO (php data object)

// connecting to the database
$servername="localhost";
$username="root";
$passward="";

// creat a connection
$conn = mysqli_connect($servername, $username, $passward);

//Die if connection was not successful
if(!$conn){
    die("soory we failed to connect:".mysqli_connect_errer());
}
else{
    echo "Connection was successful<br>";
}

echo "Connection was successful";

?>