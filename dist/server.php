<?php
$dbserver= "localhost";
$dbuser= "root";
$dbpassword = "";
$db = "nyikaclinic";

//connect to database
$conn = mysqli_connect($dbserver, $dbuser, $dbpassword, $db);

//if condition to return message if connection failed
if (!$conn) {
    echo "Connection failed!";
}
?>

