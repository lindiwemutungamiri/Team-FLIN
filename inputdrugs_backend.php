
<?php 
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
	$DrugID = "";
	$drug_name = "";
    $manufacturer = "";
    $number_available="";
    $payment_status="";
    $drug_type = "";
    $update=false;

    //grab data from the update button

    if (isset($_POST['update'])) {
        echo "update button is connected";
       
         $DrugID = $_POST['DrugID'];
         $drug_name = $_POST['drug_name'];
         $manufacturer = $_POST['manufacturer'];
         $number_available = $_POST['number_available'];
         $payment_status = $_POST['payment_status'];
         $drug_type = $_POST['drug_type'];

         //write the query
 
  $sql= "UPDATE drugs SET drug_name='".$drug_name."', manufacturer = '".$manufacturer."', number_available ='". $number_available."',payment_status = '".$payment_status."', drug_type='".$drug_type."' WHERE DrugID='".$DrugID."'";
        if (mysqli_query($db, $sql)){
            if (mysqli_query($db, $sql)){
                echo "Record updated successfully!";
     
            }else{
                echo "Error. Wasnt able to update $sql. ". mysqli_error($db);
            }
           
             header('location: drugs.php?edit.php');
         }
    }



	if (isset($_POST['save'])) {
		$DrugID = $_POST['DrugID'];
        $drug_name = $_POST['drug_name'];
        $manufacturer = $_POST['manufacturer'];
        $number_available = $_POST['number_available'];
        $payment_status = $_POST['payment_status'];
        $drug_type = $_POST['drug_type'];



		$sql= "INSERT INTO drugs (DrugID, drug_name,manufacturer,number_available,payment_status,drug_type) VALUES ('$DrugID','$drug_name','$manufacturer','$number_available','$payment_status','$drug_type')"; 
        $results = mysqli_query($db, $sql);
        //verify results and display appropriate message
    if ($results) {
        echo "registered successfully";
        header('location: drugs.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    }


  

    if (isset($_GET['del'])) {
        $DrugID= $_GET['del'];
        $update = false;
        $sqlqerry = "DELETE FROM drugs WHERE DrugID = '$DrugID' ";    
    $del = mysqli_query($db, $sqlqerry); // delete query

    if($del) {
        echo 'success';
    mysqli_close($db_name); // Close connection
    header("location:drugs.php"); // redirects to all records page
        exit();	
    } else {
        echo "Error: " . $sqlqerry . "<br>" . mysqli_error($db);        die();
    }
}


 
    ?>

   