<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

	// initialize variables
	$DrugID = "";
	$drug_name = "";
    $manufacturer = "";
    $number_available="";
    $payment_status="";
    $drug_type = "";
    $update=false;

    if (isset($_POST['update'])) {
       
         $DrugID = $REQUEST['DrugID'];
         $drug_name = $_REQUEST['drug_name'];
         $manufacturer = $_REQUEST['manufacturer'];
         $number_available = $_REQUEST['number_available'];
         $payment_status = $_REQUEST['payment_status'];
         $drug_type = $_REQUEST['drug_type'];
 
  $sql= "UPDATE drugs SET drug_name='".$drug_name."', manufacturer = '".$manufacturer."', number_available ='". $number_available."',payment_status = '".$payment_status."', drug_type='".$drug_type."' WHERE DrugID='".$DrugID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: inputdrugs.php?edit.php');
     }



	if (isset($_POST['save'])) {
		$DrugID = $_POST['DrugID'];
        $drug_name = $_POST['drug_name'];
        $manufacturer = $_POST['manufacturer'];
        $number_available = $_POST['number_available'];
        $payment_status = $_POST['payment_status'];
        $drug_type = $_POST['drug_type'];



		mysqli_query($db, "INSERT INTO drugs (DrugID, drug_name,manufacturer,number_available,payment_status,drug_type) VALUES ('$DrugID','$drug_name','$manufacturer','$number_available','$payment_status','$drug_type')"); 
		$_SESSION['message'] = "Information Saved!"; 
		header('location: drugs.php');
    }

  

    if (isset($_GET['del'])) {
        $DrugID = $_GET['del'];
        mysqli_query($db, "DELETE FROM drugs WHERE DrugID=$DrugID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: drugs.php');
    }

