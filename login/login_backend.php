<?php 



//start session and connect database
session_start(); 
include('../server/server.php'); 



//sets if condition on username and password from form in index.php
if (isset($_POST['username']) && isset($_POST['password'])) {

//protect database from sql injection
	function validate($db){
       $db = trim($db);
	   $db = stripslashes($db);
	   $db = htmlspecialchars($db);
	   return $db;
	}

	$username = validate($_POST['username']);
	$passverify = validate($_POST['password']);

	//encrypts validated password with md5
	$pass = md5($passverify);

	//validation to reject empty filled form
	if (empty($username)) {
		header("Location: login.php?error=UserName is required");
		exit();
    }
     else if(empty($pass)) {
        header("Location: login.php?error=Password is required");
		exit();

	// select query in database if form was filled 
    } 
    else{
		$sql = "SELECT * FROM users WHERE username='$username' AND user_password = '$pass' ";
		$result = mysqli_query($conn, $sql);

	/* checks if query ran successfully then creates session with username and redirects to admin page. Throws an error 
		if it failed and redirects back to home page
	*/
		if($result) {
			$row = mysqli_fetch_array($result);
			if(is_array($row)) {
				$_SESSION['username'] = $row['username'];
            	header("Location: ../dashboard/main_dashboard.php");
		        exit();
			}else{
				header("Location: login.php?error=Incorect Username or Password");
		        exit();
			}
		} else {
			header("Location: login.php?error=Failed to retrieve");
		        exit();
			}
		}
	}else{
		header("Location: login.php");
		exit();
	}


	