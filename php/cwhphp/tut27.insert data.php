<?php
//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="dbharry";


//create a connection
$conn=mysqli_connect($servername, $username, $password, $database);

// die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "connection was successfully<br>";
}

// variable to be inserted into the table
$Name = "zaheer";
$Role = "great thinker";
//sql sqery to be executed
$sql="INSERT INTO `phptrip` (`Name`, `Role`) VALUES ('$Name', '$Role')";

// Add a new trip to the Trip table in th database
$result = mysqli_query($conn, $sql);
if ($result){
    echo "the record has been inserted successfully<br>";
}
else{
    echo "The record was not inserted successfully because of this error--->". mysqli_error($conn);
}
?>