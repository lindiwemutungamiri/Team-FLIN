<?php  include('server.php'); ?>

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
 

<body class=bg-dark>

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
                                                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
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
<div class="card-header"><h3 class="text-center font-weight-light my-4">Add Drugs</h3></div>

		<div class="input-group">
			<label>Drug ID</label>
			<input type="text" name="DrugID" value="">
		</div>
		<div class="input-group">
			<label>Drug Name</label>
			<input type="text" name="drug_name" value="">
        </div>

        <div class="input-group">
			<label>Manufacturer</label>
			<input type="text" name="manufacturer" value="">
        </div>

        <div class="input-group">
			<label>Number Available</label>
			<input type="text" name="number_available"  value="">
        </div>

        <div class="input-group">
			<label>Payment Status</label>
			<input type="text" name="payment_status" value="">
        </div>
        <div class="input-group">
			<label>Drug Type</label>
			<input type="text" name="drug_type" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
    
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "nyikaclinic";

                        //create connection

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sqll = "SELECT * FROM drugs WHERE payment_status ='payable' AND number_available<= 5000";
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
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Nyika Clinic 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    

</html>