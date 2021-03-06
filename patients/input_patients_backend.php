<?php
//create connection

$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');
//check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "!";
} // initialize variables
$PatientID = "";
$first_name = "";
$last_name = "";
$Gender = "";
$DOB = "";
$p_address = "";
$phone_number = "";
$marital_status = "";
$update = false;

$update = false;

//grab form data from update button

if (isset($_POST['update'])) {

    $PatientID = $_POST['PatientID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $p_address = $_POST['p_address'];
    $phone_number = $_POST['phone_number'];
    $marital_status = $_POST['marital_status'];

//write query
    $sql = "UPDATE patients SET first_name='" . $first_name . "',last_name = '" . $last_name . "', Gender='" . $Gender . "',DOB = '" . $DOB . "' ,p_address= '" . $p_address . "',  phone_number='" . $phone_number . "' WHERE PatientID='" . $PatientID . "'";
    if (mysqli_query($db, $sql)) {
        echo "Record updated successfully!";
    } else {
        echo "Error. Wasnt able to update $sql. " . mysqli_error($db);
    }

    header('location: patients.php');
}



if (isset($_POST['save'])) {
    $PatientID = $_POST['PatientID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $p_address = $_POST['p_address'];
    $phone_number = $_POST['phone_number'];
    $marital_status = $_POST['marital_status'];
    
	//validation to reject empty filled form
	if (empty($PatientID)) {
		header("Location: input_patients.php?error=Patient ID is required!");
		exit();
    }
    
	
	//validation to reject empty filled form
	if (empty($first_name)) {
		header("Location: employees_form.php?error=First Name is required!");
		exit();
    }
    
	//validation to reject empty filled form
	if (empty($last_name)) {
		header("Location: input_patients.php?error=Last Name is required!");
		exit();
    }
    
	//validation to reject empty filled form
	if (empty($address)) {
		header("Location: input_patients.php?error=addressis required!");
		exit();
    }
  
    
    if (empty($phone_number)) {
		header("Location: input_patients.php?error=Phone number is required");
		exit();
    }


    //write query

    $sql = "INSERT INTO patients (PatientID, first_name,last_name, Gender, DOB, p_address, phone_number, marital_status) VALUES ('$PatientID','$first_name','$last_name','$Gender','$DOB','$p_address','$phone_number','$marital_status')";
    $results = mysqli_query($db, $sql);

    //verify results and display appropriate message
    if ($results) {
        echo "registered successfully";
        header('location: input_patients.php?.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}



if (isset($_GET['del'])) {
    $PatientID = $_GET['del'];
    mysqli_query($db, "DELETE FROM patients WHERE PatientID=$PatientID");
    $_SESSION['message'] = "Information Deleted";
    header('location: patients.php');
}
