


<?php 
	
    $db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');
    //check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "";
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
           
             header('location: inputdrugs.php?edit.php');
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
        $DrugID = $_GET['del'];
        mysqli_query($db, "DELETE FROM drugs WHERE DrugID=$DrugID");
        $_SESSION['message'] = "Information Deleted"; 
        header('location: drugs.php');
    }

   