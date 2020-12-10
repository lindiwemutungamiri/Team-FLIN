<?php  include('server.php'); ?>
<?php include('inputdrugs_backend.php');?>


<?php 
	if (isset($_GET['edit'])) {
		$DrugID = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM drugs WHERE DrugID=$DrugID");

		 
		// if (count($record)==1 ) {
			$n = mysqli_fetch_array($record);
			$DrugID = $n['DrugID'];
			$drug_name = $n['drug_name'];
			$manufacturer = $n['manufacturer'];
			$number_available = $n['number_available'];
			$payment_status = $n['payment_status'];
			$drug_type = $n['drug_type'];

			 
		//}
	

	
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title>Input Drugs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
 

	<body>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>DrugID</th>
                                            <th>Drug Name</th>
                                            <th>Manufacturer</th>
                                            <th>Number Available</th>
                                            <th>Payment Status</th>
                                            <th>Drug Type</th>
                                            <th colspan="2">Actions</th>

                                        </tr>
                                    </thead>

                                    </thead>
                                    <tfoot>

										<?php
											

                                        $servername = "localhost";

                                        $username = "root";

                                        $password = "";

                                        $dbname = "nyikaclinic";

                                        // Create connection

                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                        $sql = 'SELECT * from drugs';

                                        if (mysqli_query($conn, $sql)) {

                                            echo "!";
                                        } else {

                                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                        }

                                        $count = 1;

                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {

                                            // output data of each row

                                            while ($row = mysqli_fetch_assoc($result)) { ?>

                                                <tbody>

                                                    <tr>

                                                        <th>

                                                            <?php echo $row['DrugID']; ?>

                                                        </th>

                                                        <td>

                                                            <?php echo $row['drug_name']; ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $row['manufacturer']; ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $row['number_available']; ?>

                                                        </td>

                                                        <td>

                                                            <?php echo $row['payment_status']; ?>

                                                        </td>
                                                        <td>
                                                            <?php echo $row['drug_type']; ?>
														</td>
														
														
                                                        <td>
                                                            <a id= "edit" href="inputdrugs.php?edit=<?php echo $row['DrugID']; ?>" class="edit_btn">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="inputdrugs.php?del=<?php echo $row['DrugID']; ?>" class="del_btn">Delete</a>
                                                        </td>

                                                    </tr>

                                                </tbody>

                                        <?php

                                                $count++;
                                            }
                                        } else {

                                            echo '0 results';
                                        }

                                        ?>


                                </table>
                                
<form method="post" action="inputdrugs_backend.php" >

<div class="card-header"><h3 class="text-center font-weight-light my-4"> Drugs</h3></div>




		<div class="input-group">
			<label>Drug ID</label>
			<input type="text" name="DrugID" value="<?php echo $DrugID; ?>">
		</div>
		<div class="input-group">
			<label>Drug Name</label>
			<input type="text" name="drug_name" value="<?php echo $drug_name; ?>">
        </div>

        <div class="input-group">
			<label>Manufacturer</label>
			<input type="text" name="manufacturer" value="<?php echo $manufacturer; ?>">
        </div>

        <div class="input-group">
			<label>Number Available</label>
			<input type="text" name="number_available"  value="<?php echo $number_available; ?>">
        </div>

        <div class="input-group">
			<label>Payment Status</label>
			<input type="text" name="payment_status" value="<?php echo $payment_status; ?>">
        </div>
        <div class="input-group">
			<label>Drug Type</label>
			<input type="text" name="drug_type" value="<?php echo $drug_type;?>">
		</div>
		<div class="input-group">
	
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>	
	</form>
    
						<?php
						
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "nyikaclinic";

                        //create connection

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sqll = "SELECT * FROM drugs";
                        if (mysqli_query($conn, $sqll)) {
                            echo "";
                        } else {

                            echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
                        }
                        $result = mysqli_query($conn, $sqll);
                        if (mysqli_num_rows($result) > 0) {
                            //output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                            }
                        }

                        ?>

                       
                    </div>
                </div>
            </main>
           
        </div>
    </div>
    

</html>