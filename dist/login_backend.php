
<?php
$db = mysqli_connect('localhost', 'root', '', 'nyikaclinic');

if (isset($_POST['login_user'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


if (empty($username)) {

die ("Username is required");


}

if (empty($password)) {

die ("Password is required") ;

}


$password = md5($password);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) == 1) {

$_SESSION['username'] = $username;

$_SESSION['success'] = "You are now logged in";

header('location: index.php');

}else {

die ("Wrong username/password combination");

}



}?>