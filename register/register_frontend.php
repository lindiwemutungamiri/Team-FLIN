<?php include('../server/server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Nyika Clinic Register</title>
  <link href="../css/styles.css" rel="stylesheet" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">

  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card card-register mx-auto mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Create An Account</h3>
                </div>
                <div class="card-body">
                  <form action="register_backend.php" method="POST" id = "FormID" name="RegForm" onsubmit="return (ValidateRegForm());">
                    <?php if (isset($_GET['error'])) { ?>
                      <p class="alert alert-danger"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="username">Username</label>

                          <input class="form-control" type="text" id="username" name="username">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="email">Email Address</label>
                          <input class="form-control" id="email" type="email" name="email">
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="password_1">Password</label>

                          <input class="form-control" id="user_password" type="password" name="user_password">


                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="password_1"> Confirm Password</label>
                          <input class="form-control" type="password" id="password_2" name="password_2">


                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>
                  </form>
                </div>
                <div class="text-center">

                  <a class="d-block small mt-3" href="index.php">Login Page</a>

                  <!--- <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->

                </div>
              </div>
            </div>
          </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
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

  <script src="js/regValidation.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../js/regValidation.js"></script>

  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


</body>

</html>