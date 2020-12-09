<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

	// initialize variables
	$DrugID = "";
	$drug_name = "";
    $manufacturer = "";
    $number_available="";
    $payment_status="";
    $drug_type = "";
    $update=false;



	if (isset($_POST['save'])) {
		$DrugID = $_POST['DrugID'];
        $drug_name = $_POST['drug_name'];
        $manufacturer = $_POST['manufacturer'];
        $number_available = $_POST['number_available'];
        $payment_status = $_POST['payment_status'];
        $drug_type = $_POST['drug_type'];



		mysqli_query($db, "INSERT INTO drugs (DrugID, drug_name,manufacturer,number_available,payment_status,drug_type) VALUES ('$DrugID','$drug_name','$manufacturer','$number_available','$payment_status','$drug_type')"); 
		$_SESSION['message'] = "Information Saved!"; 
		header('location: index.php');
	}

