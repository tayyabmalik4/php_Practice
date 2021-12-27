<?php
echo "welcome to the 25th tuturial. this is creating a database using MySQL.<br> ";

$servername = "localhost";
$username = "root";
$passward = "";

$conn = mysqli_connect($servername, $username, $passward);

//die if connection was not successful
if (!$conn){
    die("soory we failed to connect:". mysqli_connect_errer());
}
else{
    echo "connection was successful";
    echo "<br>";

}

//creat a database
$sql = "CREATE DATABASE dbharry";
$result = mysqli_query($conn, $sql);

// Checkfor the data base creation success
if($result){
    echo "the db was created successfully";
}
else{
    echo "The db was not successfully because of this errer---> ". mysqli_error($conn);
echo "<br>";
}
echo "The result is ";
echo var_dump($result);
echo "<br>";



?>