<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

	// initialize variables
	$EmployeeID = "";
	$first_name = "";
    $last_name = "";
    $email="";
    $Gender="";
    $DOB = "";
    $Positions="";
    $address="";
    $phone_number ="";
    $marital_status="";
    $update=false;

    if (isset($_POST['update'])) {
       
         $EmployeeID = $REQUEST['EmployeeID'];
         $first_name = $_REQUEST['first_name'];
         $last_name = $_REQUEST['last_name'];
         $email = $_REQUEST['email'];
         $Gender= $_REQUEST['Gender'];
         $DOB = $_REQUEST['DOB'];
         $Positions = $_REQUEST['Positions'];
         $address = $_REQUEST['address'];
         $phone_number = $_REQUEST['phone_number'];
         $marital_status = $_REQUEST['marital_status'];




 
  $sql= "UPDATE patients SET first_name='".$first_name."', last_name = '".$last_name."', email ='". $email."',Gender = '".$Gender."', drug_type='".$drug_type."' WHERE DrugID='".$DrugID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: inputdrugs.php?edit.php');
     }



	if (isset($_POST['save'])) {
		$EmployeeID = $REQUEST['EmployeeID'];
         $first_name = $_REQUEST['first_name'];
         $last_name = $_REQUEST['last_name'];
         $email = $_REQUEST['email'];
         $Gender= $_REQUEST['Gender'];
         $DOB = $_REQUEST['DOB'];
         $Positions = $_REQUEST['Positions'];
         $empaddress = $_REQUEST['address'];
         $phone_number = $_REQUEST['phone_number'];
         $marital_status = $_REQUEST['marital status'];




		mysqli_query($db, "INSERT INTO employees (EmployeeID, first_name,last_name, email, Gender, DOB, Positions,empaddress,phone_number, ,marital_status,) VALUES ('$EmployeeID','$first_name','$last_name','$email','$Gender',''$DOB','$Positions',$empaddress',''$phone_number',$marital_status')"); 
		$_SESSION['message'] = "Information Saved!"; 
		header('location: employees.php');
    }

  

    if (isset($_GET['del'])) {
        $DrugID = $_GET['del'];
        mysqli_query($db, "DELETE FROM employees WHERE EmployeeID=$EmployeeID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: employees.php');
    }

