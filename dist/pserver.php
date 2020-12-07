<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "nyikaclinic";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['reg_p'])) {

// receive all input values from the form

$DrugID = $_POST['DrugID'];

$drug_name= mysqli_real_escape_string($conn,$_POST['drug_name']);

$manufacturer = mysqli_real_escape_string($conn,$_POST['manufacturer']);

$number_available = mysqli_real_escape_string($conn,$_POST['number_available']);

$payment_status= mysqli_real_escape_string($conn,$_POST['payment_status']);

$drug_type= mysqli_real_escape_string($conn,$_POST['drug_type']);


// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

$sql = "INSERT INTO drugs (DrugID,drug_name,manufacturer,payment_status, drug_type)

VALUES ('$DrugID', '$drug_name', '$manufacturer','$payment_status','$drug_type')";

if ($conn->query($sql) === TRUE) {

echo "alert('New record created successfully')";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}

}

$conn->close();

?>