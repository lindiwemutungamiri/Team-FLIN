<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nyika Clinic Register</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
      
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card card-register mx-auto mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create An Account</h3></div>
                                    <div class="card-body">
                                        <form method = "post" action="register_backend.php">
                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class ="col-md-12">
                                                  <label for="exampleInputName">Username</label>
                                                  
                                                  <input class="form-control" id="exampleInputName" type="text"   name="username" value="<?php echo $username; ?>" >

                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-row">
                                                <div class ="col-md-12">
                                                  <label for="exampleInputEmail1">Email Address</label>
                                                  <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="<?php echo $email; ?>" >
                                                </div>
                                              </div>
                                            </div>
           

                                            <div class="form-group">
                                              <div class = "form-row">
                                                <div class="col-md-6">
                                                  <label for="exampleInputPassword1">Password</label>

                                                  <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" >


                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class = "form-row">
                                                <div class="col-md-6">
                                                  <label for="exampleInputPassword1"> Confirm Password</label>

                                                  <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" >


                                                </div>
                                              </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block" name="reg_user">Register</button>                                          
                                        </form>
                                    </div>
                                    <div class="text-center">

                                      <a class="d-block small mt-3" href="login_frontend.php">Login Page</a>
                             
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        

    </body>
</html>
