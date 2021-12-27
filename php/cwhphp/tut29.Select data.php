<?php
//creating to the database

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
    echo "Connectio was successful<br>";
}
$sql= "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// find the number of records returned
$num= mysqli_num_rows($result);
echo $num; 
echo "Number found in the database<br>";

// Display the rows returned by the sql query 
if ($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    
    //We can fetch in a better way susing the while loop
    while($row=mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['S no.']  . ". Hello ". $row['Name'] . " welcome to " . $row['Role'];
        echo "<br>";
    }
}

?>