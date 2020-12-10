
<?php
//create connection  
	
    $db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

    //check connection
    
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "";
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
         $empaddress = $_POST['address'];
         $phone_number = $_POST['phone_number'];
         $marital_status = $_POST['marital_status'];

//write query

 
  $sql= "UPDATE employees SET first_name='".$first_name."', last_name = '".$last_name."', email ='". $email."',Gender = '".$Gender."', DOB = '".$DOB."',Positions = '".$Positions."',empaddress = '".$empaddress."',phone_number = '".$phone_number."', marital_status='".$marital_status."' WHERE EmployeeID='".$EmployeeID."'";
        if (mysqli_query($db, $sql)){
            echo "Record updated successfully!";
 
        }else{
            echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
        }
       
         header('location: input_employees.php?edit.php');
     }



	if (isset($_POST['save'])) {
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
       
        $EmployeeID = $_GET['del'];
        mysqli_query($db, "DELETE FROM employees WHERE EmployeeID=$EmployeeID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: employees.php');
    }

