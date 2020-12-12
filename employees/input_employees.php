<?php include('../server/server.php'); ?>
<?php include('input_employees_backend.php'); ?>


<?php
if (isset($_GET['edit'])) {
    $EmployeeID = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM employees WHERE EmployeeID=$EmployeeID");


    // if (count($record)==1 ) {
    $n = mysqli_fetch_array($record);
    $EmployeeID = $n['EmployeeID'];
    $first_name = $n['first_name'];
    $last_name = $n['last_name'];
    $email = $n['email'];
    $Gender = $n['Gender'];
    $DOB = $n['DOB'];
    $Positions = $n['Positions'];
    $empaddress = $n['empaddress'];
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
	<title>Input Employees</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="sb-nav-fixed">
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

                <th>EmployeeID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Positions</th>
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

            $sql = 'SELECT * from employees';

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

                                <?php echo $row['EmployeeID']; ?>

                            </th>

                            <td>

                                <?php echo $row['first_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['last_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['email']; ?>

                            </td>

                            <td>

                                <?php echo $row['Gender']; ?>

                            </td>



                            <td>

                                <?php echo $row['DOB']; ?>

                            </td>
                            <td>

                                <?php echo $row['Positions']; ?>
                            <td>

                                <?php echo $row['empaddress']; ?>

                            </td>
                            <td>

                                <?php echo $row['phone_number']; ?>

                            </td>
                            <td>
                                <?php echo $row['marital_status']; ?>
                            </td>
                            <td>
                                <a id="edit" href="input_employees.php?edit=<?php echo $row['EmployeeID']; ?>" class="edit_btn">Edit</a>
                            </td>
                            <td>
                                <a onClick = "return confirm('Are you sure you want to delete this?')" href="input_employees.php?del=<?php echo $row['EmployeeID']; ?>" class="del_btn">Delete</a>
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

    <form method="post" action="input_employees_backend.php">

        <div class="card-header">
            <h3 class="text-center font-weight-light my-4"> Employees</h3>
        </div>




        <div class="input-group">
            <label>Employee ID</label>
            <input type="text" name="EmployeeID" value="<?php echo $EmployeeID; ?>">
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
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
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
            <label>Positions</label>
            <input type="text" name="Positions" value="<?php echo $Positions; ?>">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="empaddress" value="<?php echo $empaddress; ?>">
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

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nyikaclinic";

    //create connection

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sqll = "SELECT * FROM employees";
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
  
</body>

</html>