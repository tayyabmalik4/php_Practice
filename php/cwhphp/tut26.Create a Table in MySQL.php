<?php
// connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="dbharry";

$conn=mysqli_connect($servername, $username, $password, $database);

// die if connection was not successful
if (!$conn){
    die("Soory we failed to connection". mysqli_connect_error());
}
else{
    echo "connection is successful<br>";
}

//create a table in the db
$sql="CREATE TABLE `phptrip` ( `S no.` INT(6) NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(11) NOT NULL ,  `Role` VARCHAR(11) NOT NULL ,  `Date of joining` DATETIME NOT NULL ,  `gender` VARCHAR(2) NOT NULL ,  `age` INT NOT NULL ,    PRIMARY KEY  (`S no.`)) ";
$result=mysqli_query($conn, $sql);

//check for the database creation success
if($result){
    echo "the table was created successfully!<br>";
}
else{
    echo "the table was not created successfully because of this error---> ". mysqli_error($conn);
}


?>