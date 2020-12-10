<?php

include('pserver.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title>Product Page</title>

<!-- Bootstrap core CSS-->

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->

<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->

<link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

<a class="navbar-brand" href="index.php">Nyika Clinic Management System</a>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive">

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

<a class="nav-link" href="index.php">

<i class="fa fa-fw fa-dashboard"></i>

<span class="nav-link-text">Dashboard</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="charts.html">

<i class="fa fa-check-square"></i>

<span class="nav-link-text">Drugs</span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="register_frontend.php">

<i class="fa fas fa-user"></i>

<span class="nav-link-text">Register Users</span>

</a>

</li>

</ul>

<ul class="navbar-nav sidenav-toggler">

<li class="nav-item">

<a class="nav-link text-center" id="sidenavToggler">

<i class="fa fa-fw fa-angle-left"></i>

</a>

</li>

</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-envelope"></i>

<span class="d-lg-none">Messages

<span class="badge badge-pill badge-primary">12 New</span>

</span>

<span class="indicator text-primary d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="messagesDropdown">

<h6 class="dropdown-header">New Messages:</h6>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>Lindiwe Mutungamiri</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Okay thanks! </div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>Tiara Muropa</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>M J</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">View all messages</a>

</div>

</li>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-bell"></i>

<span class="d-lg-none">Alerts

<span class="badge badge-pill badge-warning">6 New</span>

</span>

<span class="indicator text-warning d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="alertsDropdown">

<h6 class="dropdown-header">New Alerts:</h6>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-danger">

<strong>

<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">View all alerts</a>

</div>

</li>

<li class="nav-item">

<form class="form-inline my-2 my-lg-0 mr-lg-2">

<div class="input-group">

<input class="form-control" type="text" placeholder="Search for...">

<span class="input-group-append">

<button class="btn btn-primary" type="button">

<i class="fa fa-search"></i>

</button>

</span>

</div>

</form>

</li>

<li class="nav-item">

<a class="nav-link" data-toggle="modal" data-target="#exampleModal">

<i class="fa fa-fw fa-sign-out"></i>Logout</a>

</li>

</ul>

</div>

</nav>

<div class="content-wrapper">

<div class="container-fluid">

<!-- Breadcrumbs-->

<ol class="breadcrumb">

<li class="breadcrumb-item">

<a href="index.php">Dashboard</a>

</li>

<li class="breadcrumb-item active">Product Page</li>

</ol>

<div class="row">

<div class="col-12">

<h1>Create Product </h1>

</div>

<div class="col-md-8">

<form method="post" action="pserver.php">

<div class="form-group">

<label>Drug ID</label>

<input type="text" class="form-control" name="DrugID" required>

</div>

<div class="form-group">

<label>Drug Name</label>

<input type="text" class="form-control"  name="drug_name" required>

</div>

<div class="form-group">

<label>Manufacturer</label>

<input type="text" class="form-control" name="manufacturer" required>

</div>


<div class="form-group">

<label>Number Available</label>

<input type="text" class="form-control" name="number_available" required>

</div>


<div class="form-group">

<label>Payment Status</label>

<input type="text" class="form-control" name="payment_status" required>

</div>

<div class="form-group">

<label>Drug Type</label>

<textarea class="form-control" name="drug_type" required></textarea>

</div>

<button type="submit" class="btn btn-primary" name="reg_p">Submit</button>

</form>

</div>

</div>

</div>

<!-- /.container-fluid-->

<!-- /.content-wrapper-->

<footer class="sticky-footer">

<div class="container">

<div class="text-center">

<small>Copyright © Nyika Clinic 2020</small>

</div>

</div>

</footer>

<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<!-- Logout Modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

<button class="close" type="button" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

<div class="modal-footer">

<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

<a class="btn btn-primary" href="login.php">Logout</a>

</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<script src="js/sb-admin.min.js"></script>

</div>

</body>

</html>