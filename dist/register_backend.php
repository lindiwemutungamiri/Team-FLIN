<?php
$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

if (isset($_POST['reg_user'])) {
    

$username = $_POST['username'];

$email = $_POST['email'];

$passverify = $_POST['password_1'];
$password_2 = $_POST['password_2'];

$password_1 = md5($passverify);


$data=$_POST;

if (empty($data['username']) ||

      empty($data['email']) ||
      empty($data['password_1']) ||
      empty($data['password_2'])) {   
        die('Please fill all required fields!');
}
if ($data['password_1'] !== $data['password_2']) {

    
    header("Location: register_frontend.php?error=Passwords must match");
		        die(); 

 }
    
   
// first check the database to make sure

// a user does not already exist with the same username and/or email

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);

$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists

if ($user['username'] === $username) {

 
				header("Location: register_frontend.php?error=Username already exists");
		        exit();
			

}

if ($user['email'] === $email) {

  
    header("Location: register_frontend.php?error=Email already exists");
        exit();
  

}else{
  
// Finally, register user if there are no errors in the form


$password = md5($password_1);//encrypt the password before saving in the database

echo $password ;

$query = "INSERT INTO users(username, email, user_password)

VALUES('$username', '$email', '$password_1')";

mysqli_query($db, $query);

$_SESSION['username'] = $username;

$_SESSION['success'] = "You are now logged in";

if (isset($_SESSION['message'])){


			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		

}
echo " <script>alert ('Your information has been submitted')</script>";
header('location: index.php');

}

}




}

?>