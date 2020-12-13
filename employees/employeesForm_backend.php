
<?php
//create connection  
	
$dbserver= "localhost";
$dbuser= "root";
$dbpassword = "";
$db_name = "nyikaclinic";

//connect to database
$db = mysqli_connect($dbserver, $dbuser, $dbpassword, $db_name);

//if condition to return message if connection failed
if (!$db) {
    echo "Connection failed!";
}

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

    //grab data from the update button 

    if (isset($_POST['update'])) {
       
         $EmployeeID = $_POST['EmployeeID'];
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $email = $_POST['email'];
         $Gender= $_POST['Gender'];
         $DOB = $_POST['DOB'];
         $Positions = $_POST['Positions'];
         $empaddress = $_POST['empaddress'];
         $phone_number = $_POST['phone_number'];
         $marital_status = $_POST['marital_status'];

//write query

 
  $sql= "UPDATE employees SET first_name='".$first_name."', last_name = '".$last_name."', email ='". $email."',Gender = '".$Gender."', DOB = '".$DOB."',Positions = '".$Positions."',empaddress = '".$empaddress."',phone_number = '".$phone_number."', marital_status='".$marital_status."' WHERE EmployeeID='".$EmployeeID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: employees_form.php?edit.php');
     }



	if (isset($_POST['save'])) {
        $EmployeeID = $_POST['EmployeeID'];
        $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $email = $_POST['email'];
         $Positions = $_POST['Positions'];
     


	//validation to reject empty filled form
	if (empty($EmployeeID)) {
		header("Location: employees_form.php?error=Employee ID is required!");
		exit();
    }
    
	
	//validation to reject empty filled form
	if (empty($first_name)) {
		header("Location: employees_form.php?error=First Name is required!");
		exit();
    }
    
	//validation to reject empty filled form
	if (empty($last_name)) {
		header("Location: employees_form.php?error=Last Name is required!");
		exit();
    }
    
	//validation to reject empty filled form
	if (empty($email)) {
		header("Location: employees_form.php?error=email is required");
		exit();
    }
  
    
    if (empty($Positions)) {
		header("Location: employees_form.php?error=Positions is required");
		exit();
    }


		$sql="INSERT INTO employees (EmployeeID, first_name,last_name, email, Gender, DOB, Positions, empaddress, phone_number, marital_status) VALUES ('$EmployeeID','$first_name','$last_name','$email','$Gender','$DOB','$Positions','$empaddress','$phone_number','$marital_status')"; 
        $results = mysqli_query($db, $sql);

    //verify results and display appropriate message
    if ($results) {
        echo "registered successfully";
        header('location: employees.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    }

  

   
    if (isset($_GET['del'])) {
        $EmployeeID= $_GET['del'];
        $update = false;
        $sqlqerry = "DELETE FROM employees WHERE EmployeeID = '$EmployeeID' ";    
    $del = mysqli_query($db, $sqlqerry); // delete query

    if($del) {
        echo 'success';
    mysqli_close($db_name); // Close connection
    header("location:employees.php"); // redirects to all records page
        exit();	
    } else {
        echo "Error: " . $sqlqerry . "<br>" . mysqli_error($db);        die();
    }
}
?>

