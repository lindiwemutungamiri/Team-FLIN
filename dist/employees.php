<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nyika Clinic Admin Dashboard</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Nyika Clinic</a>
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

                    <a class="dropdown-item" href="login_frontend.php">Logout</a>
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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Main Dashboard
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        </div>
                        <div class="sb-sidenav-menu-heading">Clinic Data</div>
                        <a class="nav-link" href="drugs.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Drugs
                        </a>
                        <a class="nav-link" href="employees.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Employees
                        </a>
                        <a class="nav-link" href="patients.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Patients
                        </a>
                        <a class="nav-link" href="register_frontend.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Register Users
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    lindiwemutungamiri
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Employees Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Employees Dashboard</li>
                    </ol>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i>
                                    Female Employees
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Male Employees
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Employees Table
                        </div>
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

                        <div class="card-body">
                            <div class="table-responsive">
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

                                                            <?php echo $row['address']; ?>

                                                        </td>
                                                        <td>

                                                            <?php echo $row['phone_number']; ?>

                                                        </td>
                                                        <td>
                                                            <?php echo $row['marital_status']; ?>
                                                        </td>
                                                        <td>
                                                            <a href="input_employees.php?edit=<?php echo $row['EmployeeID']; ?>" class="edit_btn">Edit</a>
                                                        </td>
                                                        <td>
                                                            <a href="inpute_employees.php?del=<?php echo $row['EmployeeID']; ?>" class="del_btn">Delete</a>
                                                        </td>
                                                        <td>
                                                            <a href="inpute_employees.php?save=<?php echo $row['EmployeeID']; ?>" class="del_btn">Add</a>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>