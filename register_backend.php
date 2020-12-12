<?php
//start session and connect database
session_start(); 
include('server.php');
/* so you don't connect to db unnecessarily with empty inputs, check whether user supplied all input*/
//if(isset($_GET['fname']) || isset($_GET['lname']) || isset($_GET['email']) || isset($_GET['class'])) {

  function encryptPassword($passwordToEncrypt) {
    $hash = password_hash($passwordToEncrypt, PASSWORD_DEFAULT); 
    return $hash;
}

  

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'nyikaclinic';

  $conn = new MySQLi($host, $user, $password, $db_name);

  if($conn->connect_error) {  
    die('database connection error: ' . $conn->connect_error);
  } 

  else {
    if (isset($_POST['reg_user'])) {

      
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password_1 =$_POST["user_password"];
  $password_2 = $_POST["password_2"];

  $user_password = md5($password_1);
  //validation to reject empty filled form
  //validation to reject empty filled form
	if (empty($username)) {
		header("Location: register_frontend.php?error=UserName is required");
		exit();
    }
     else if(empty($email)) {
        header("Location: register_frontend.php?error=Email is required");
		exit();

	// select query in database if form was filled 
    } 
	if (empty($user_password)) {
		header("Location: register_frontend.php?error=Password is required");
		exit();
    }
     else if(empty($password_2)) {
        header("Location: register_frontend.php?error=Password is required");
        exit();
     }

     else if($password_1 != $password_2){ 
        header("Location: register_frontend.php?error=Passwords must match!");
        exit();
    }
    
        $sql = " INSERT INTO users (username, email,user_password) VALUES ('$username', '$email', '$user_password') ";
        $results = mysqli_query($conn, $sql);
        if($results) {

          echo '
          <script>
          window.onload = function() {
            alert("Registration Successful");
            location.href = "index.php";  
          }
          </script>
          ';

        } else{ 
            header("Location: register_frontend.php?error=Failed to register!");
            exit();
        }
      $conn->close();
  }
}


?>
