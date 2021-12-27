<?php
//what is a session
// Information to manage information across difference pages

//Varify the user login info
session_start();
$_SESSION['username'] = "Harry";
$_SESSION['favCat'] = "Books";
echo "We have saved over session";



?>