<?php include('../server/server.php'); ?>
<?php include('input_patients_backend.php'); ?>


<?php
if (isset($_GET['edit'])) {
    $PatientID = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM patients WHERE PatientID=$PatientID");


    // if (count($record)==1 ) {
    $n = mysqli_fetch_array($record);
    $PatientID = $n['PatientID'];
    $first_name = $n['first_name'];
    $last_name = $n['last_name'];
    $Gender = $n['Gender'];
    $DOB = $n['DOB'];
    $p_address = $n['p_address'];
    $phone_number = $n['phone_number'];
    $marital_status = $n['marital_status'];




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
    <title>Patients </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">


<body>

    <?php if (isset($_SESSION['message'])) : ?>
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

                <th>PatientID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Marital Status</th>
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

            $sql = 'SELECT * from patients';

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

                                <?php echo $row['PatientID']; ?>

                            </th>

                            <td>

                                <?php echo $row['first_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['last_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['Gender']; ?>

                            </td>

                            <td>

                                <?php echo $row['DOB']; ?>

                            </td>
                            <td>

                                <?php echo $row['p_address']; ?>

                            </td>
                            <td>

                                <?php echo $row['phone_number']; ?>

                            </td>


                            <td>
                                <?php echo $row['marital_status']; ?>
                            </td>


                            <td>
                                <a href="input_patients.php?edit=<?php echo $row['PatientID']; ?>" class="edit_btn">Edit</a>
                            </td>
                            <td>
                                <a onClick="return confirm('Are you sure you want to delete this?')" href="input_patients.php?del=<?php echo $row['PatientID']; ?>" class="del_btn">Delete</a>
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

    <form method="post" action="input_patients_backend.php">
        <?php if (isset($_GET['error'])) { ?>
            <strong style="color: red;" class="alert alert-danger"><?php echo $_GET['error']; ?></strong>
        <?php } ?>

        <div class="card-header">
            <h3 class="text-center font-weight-light my-4"> Patients</h3>
        </div>




        <div class="input-group">
            <label>Patient ID</label>
            <input type="text" name="PatientID" value="<?php echo $PatientID; ?>">
        </div>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>">
        </div>

        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>">
        </div>

        <div class="input-group">
            <label>Gender</label>
            <input type="text" name="Gender" value="<?php echo $Gender; ?>">
        </div>

        <div class="input-group">
            <label>DOB</label>
            <input type="text" name="DOB" value="<?php echo $DOB; ?>">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="p_address" value="<?php echo $p_address; ?>">
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phone_number" value="<?php echo $phone_number; ?>">
        </div>
        <div class="input-group">
            <label>Marital Status</label>
            <input type="text" name="marital_status" value="<?php echo $marital_status; ?>">
        </div>
        <div class="input-group">

            <?php if ($update == true) : ?>
                <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
            <?php else : ?>
                <button class="btn" type="submit" name="save">Save</button>
            <?php endif ?>
    </form>



    </div>
    </div>
    </main>

    </div>
    </div>


</html>