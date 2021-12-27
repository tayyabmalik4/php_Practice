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

$sql= "SELECT * FROM `phptrip` WHERE `Role` = 'great think'";
$result = mysqli_query($conn, $sql);

// Usage of the WHERE Clause to fetch data from the database
$num= mysqli_num_rows($result);
echo $num; 
echo " Number found in the database<br>";
$no=1;
 if($num>0){
     while($row=mysqli_fetch_assoc($result)){
     echo $no  . ". Hello ". $row['Name'] . " welcome to " . $row['Role'];
    echo "<br>";
    $no=$no+1;
    }
}

//Usage of WHERE Clause to update data
$sql="UPDATE `phptrip` SET `Name` = 'tharki' WHERE `Role` = 'great think'";
$result = mysqli_query($conn, $sql);
echo var_dump($result); 
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff";

if($result){
    echo "We updated the record Successfully";

}
else{
    echo "We could not update the record successfully";
}


?>