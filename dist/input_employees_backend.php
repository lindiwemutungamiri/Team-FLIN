
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
    $empaddress="";
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
         $empaddress = $_REQUEST['address'];
         $phone_number = $_REQUEST['phone_number'];
         $marital_status = $_REQUEST['marital_status'];




 
  $sql= "UPDATE employees SET first_name='".$first_name."', last_name = '".$last_name."', email ='". $email."',Gender = '".$Gender."', DOB = '".$DOB."',Positions = '".$Positions."',empaddress = '".$empaddress."',phone_number = '".$phone_number."', marital_status='".$marital_status."' WHERE EmployeeID='".$EmployeeID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: input_employees.php?edit.php');
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
        $EmployeeID = $_GET['del'];
        mysqli_query($db, "DELETE FROM employees WHERE EmployeeID=$EmployeeID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: employees.php');
    }

