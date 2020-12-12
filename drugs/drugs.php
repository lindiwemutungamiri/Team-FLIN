<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Drugs Dashboard</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="../">Nyika Clinic</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">

                <div class="input-group-append">

                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="../index.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="../dashboard/main_dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Main Dashboard
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        </div>
                        <div class="sb-sidenav-menu-heading">Clinic Data</div>
                        <a class="nav-link" href="../drugs/drugs.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            View Drugs
                        </a>
                        <a class="nav-link" href="../employees/employees.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            View Employees
                        </a>
                        <a class="nav-link" href="../patients/patients.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            View Patients
                        </a>
                        <a class="nav-link" href="../register/register_frontend.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Register Users
                        </a>

                       
                    </div>
                </div>
                
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Drugs Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>

                 
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Drugs Table

                        </div>
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

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>DrugID</th>
                                            <th>Drug Name</th>
                                            <th>Manufacturer</th>
                                            <th>Number Available</th>
                                            <th>Payment Status</th>
                                            <th>Drug Type</th>
                                            <th colspan="2">Actions </th>

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
                                                            <a href="drugs_form.php?edit=<?php echo $row['DrugID']; ?>" class="edit_btn">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a onClick = "return confirm('Are you sure you want to delete this?')" href="drugs_form.php?del=<?php echo $row['DrugID']; ?>" class="del_btn">Delete</a>
                                                        </td>
                                                        <td>
                                                            <a href="drugs_form.php?save=<?php echo $row['DrugID']; ?>" class="edit_btn">Add</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    
</body>

</html>