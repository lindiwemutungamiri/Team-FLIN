<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

	// initialize variables
	$PatientID = "";
	$first_name = "";
    $last_name= "";
    $Gender="";
    $DOB="";
    $p_address = "";
    $phone_number = "";
    $marital_status = "";
    $update=false;

    if (isset($_POST['update'])) {
       
         $PatientID = $REQUEST['PatientID'];
         $first_name = $_REQUEST['first_name'];
         $last_name = $_REQUEST['last_name'];
         $Gender = $_REQUEST['Gender'];
         $DOB= $_REQUEST['DOB'];
         $p_address = $_REQUEST['p_address'];
         $phone_number= $_REQUEST['phone_number'];
         $marital_status = $_REQUEST['marital_status'];
     
 
  $sql= "UPDATE patients SET first_name='".$first_name."',last_name = '".$last_name."', Gender='". $Gender."',DOB = '".$DOB."', ,p_address= '".$p_address."',  phone_number='".$phone_number."' WHERE PatientID='".$PatientID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: input_patients.php?edit.php');
     }



	if (isset($_POST['save'])) {
        $PatientID = $REQUEST['PatientID'];
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Gender = $_REQUEST['Gender'];
        $DOB= $_REQUEST['DOB'];
        $p_address = $_REQUEST['p_address'];
        $phone_number= $_REQUEST['phone_number'];
        $marital_status = $_REQUEST['marital_status'];
    



		mysqli_query($db, "INSERT INTO patients (PatientID, first_name,last_name, Gender, DOB, p_address, phone_number, marital_status) VALUES ('$PatientID','$first_name','$last_name','$Gender','$DOB',,'$p_address',,'$phone_number','$marital_status')"); 
		$_SESSION['message'] = "Information Saved!"; 
		header('location: patients.php');
    }

  

    if (isset($_GET['del'])) {
        $PatientID = $_GET['del'];
        mysqli_query($db, "DELETE FROM patients WHERE PatientID=$PatientID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: patients.php');
    }

